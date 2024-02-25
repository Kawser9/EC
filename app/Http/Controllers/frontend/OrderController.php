<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Order;
use App\Models\backend\OrderDetail;
use App\Models\backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function checkOut()
    {
        return view('frontend.pages.checkOut');
    }
    public function placeOrder(Request $request)
    {

        $myCart = session()->get('cart');
        // dd($request->all() , $myCart);
        try {
            DB::beginTransaction();
            // dd($myCart);
                // For order creation
                $order = Order::create([
                    'customer_id' => auth('customer')->user()->id,
                    'name' => $request->name,
                    'email' => auth('customer')->user()->email,
                    'address' => $request->address,
                    'number' => $request->number,
                    'order_status' => 'pending',
                    'payment_status' => 'pending',
                    'payment_method' => $request->paymentMethod,
                    'total' => array_sum(array_column($myCart, 'sub_total')),
                ]);

                // For order details creation
                foreach ($myCart as $key => $cart) {
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'product_id' => $key,
                        'price' => $cart['price'],
                        'qty' => $cart['quantity'],
                        'subtotal' => $cart['sub_total'],
                    ]);

                }
                DB::commit();

                notify()->success('Order is Placed.', 'Order');

                session()->forget('cart');
                return redirect()->back();

        } catch (Throwable $e) {
            DB::rollBack();
            dd($e->getMessage());
            notify()->warning('Something went wrong.', 'Order');
            return redirect()->back();
        }
    }



    public function list()
    {
        $orders = Order::with('customer')->get();
        return view('backend.pages.order.list');
    }
    public function ajaxList(Request $request)
    {
        $data = Order::select('id','customer_id','name','email','number','address','payment_method','total')->get();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a class="btn btn-xs btn-primary" href="/order/show/$data->id"><i class="glyphicon glyphicon-eye-open"></i> View</a>';
                    $btn .= '<a href="javascript:void(1)" class="delete btn btn-danger btn-sm">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function allOrder()
    {
        $orders = Order::with('customer')->get();
        return view('backend.pages.order.allOrder',compact('orders'));
    }
    public function show($id)
    {
        $order = Order::find($id);
        $orderDetails= OrderDetail::with('product')->where('order_id', $id)->get();
        return view('backend.pages.order.show',compact(['orderDetails','order']));
    }
    public function update(Request $request,$id)
    {

        $order = Order::find($id);
        $order ->update([
            'order_status'=> $request->order_status,
            'payment_status'=> $request->payment_status,
        ]);
        notify()->success('Order Updated Successfully.', 'Order');
        return redirect()->back();
    }
    public function orderPdf($id)
    {
        // $fileName = 'product.pdf';
    //    dd($id);
        $order = Order::find($id);
        $orderDetails= OrderDetail::with('product')->where('order_id', $id)->get();
        // dd($order ,$orderDetails);
        $html = view('backend.pages.order.pdf',compact(['orderDetails','order']))->render();
        $user = auth()->user()->name;
        $fileName = 'order_' . date('d-M-Y_H-i-s')  . $user . '.' . 'pdf';
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($html);
        // return $pdf->download($fileName);
        return $pdf->stream();
    }

}
