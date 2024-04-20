<?php

namespace App\Http\Controllers\backend;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Models\backend\Employee;
use App\Models\backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function getStockNotifications()
    {
        $notifications = Product::all();

        return view('backend.fixed.header',compact('notifications'));
    }
    public function list()
    {
        // Cache::forget('products');
        // Cache::forget('homeProducts');
        if(Cache::has('products'))
        {
            $dataSource="Cache";
            $products=Cache::get('products');

        }else{
            $dataSource="Database";
            $products = Product::latest()->paginate(15);

            Cache::put('products',$products);
        }
        return view('backend.pages.product.list',compact('products','dataSource'));
        // $products = Product::latest()->paginate(5);
        // return view('backend.pages.product.list',compact('products'));
    }
    public function show($id)
    {
        $products = Product::find($id);
        // dd($products);
        return view('backend.pages.product.show',compact('products'));
    }
    public function create()
    {
        $product = Product::latest()->first();
        return view('backend.pages.product.create',compact('product'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // if($request->hasFile('productImage'))
        //     {
        //         $image=$request->file('productImage');
        //         $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
        //         $image->storeAs('/products',$fileName);
        //     }



            $images=array();
            if($files=$request->file('productImage')){
                foreach($files as $file){
                    $name=uniqid(2).'.'.$file->getClientOriginalExtension();
                    $file->move('productImage',$name);
                    $images[]=$name;
                }
            }



        Product::create([
            'productCode'   =>$request->productCode,
            'productName'   =>$request->productName,
            'quantity'      =>'20',
            'description'   =>'New',
            'productPrice'  =>$request->productPrice,
            'productImage'  => implode("|",$images),
        ]);

        notify()->success('Product added Successfully.', 'Product');
        Cache::forget('products');
        Cache::forget('homeProducts');
        return redirect()->back();
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.pages.product.edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all(),$id);
        $product = Product::find($id);
        $product->update([
            'productName'   =>$request->productName,
            'quantity'      =>$request->quantity,
            'productPrice'  =>$request->productPrice,
            'status'        =>$request->status,
        ]);

        notify()->success('Product Updated Successfully.', 'Product');
        Cache::forget('products');
        Cache::forget('homeProducts');
        return redirect()->back();
    }
    public function delete($id)
    {
        $product = Product::find($id);
        // dd($product->id);
        $product -> delete();
        notify()->success('One product deleted Successfully.', 'Product');
        return redirect()->back();
    }
    public function productPdf()
    {
        // $fileName = 'product.pdf';
        $user = auth()->user()->name;
        $fileName = 'product_' . date('d-M-Y_H-i-s')  . $user . '.' . 'pdf';
        $products = Product::all();
        $html = view('backend.pages.product.pdf',compact('products'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($html);
        return $pdf->download($fileName);
        // $pdf->loadHTML('backend.pages.product.pdf');
        // return $pdf->stream();
    }
    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
    public function excelUpload()
    {
        return view('backend.pages.product.uploadExcel');
    }








}
// $imagess = array ();
//         if($images=$request->file('productImage'))
//         {
//             foreach($images as $image)
//             {
//             $fileName=date('Ymdhsi').'.'.strtolower($image->getClientOriginalExtension());
//             $upload_path = 'public/products/';
//             $image_url = $fileName.$upload_path;
//             $image -> move($fileName.$upload_path);
//             $imagess[]=$image_url;
//             }
//         }

//         Product::create([
//             'productCode'=>$request->productCode,
//             'productName'=>$request->productName,
//             'productPrice'=>$request->productPrice,
//             'productImage'=> implode('|' ,$imagess),
//         ]);
