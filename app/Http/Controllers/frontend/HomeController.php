<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::latest()->take(8)->get();
        return view('frontend.pages.dashboard',compact('products'));
    }
    public function allProduct()
    {
        $products = Product::latest()->get();
        return view('frontend.pages.allProduct', compact('products'));
    }
    public function addToCart(Request $request)
    {
        // dd($id ,$request->quantity);
        $id=$request->id;
        $cart=Session()->get('cart');
        $product=Product::find($id);
        if ($product->quantity >= $request->quantity)
        {
        // dd($product);
            if (empty($cart))
            {
            $newCart[$id]=[
                'name'=>$product->productName,
                'image'=>$product->productImage,
                'price'=>$product->productPrice,
                'quantity'=>$request->quantity,
                'sub_total'=>$product->productPrice * (int)request()->quantity
            ];
                session()->put('cart',$newCart);

            //    dd($cart);

            }
            else
            {
                if (array_key_exists($id,$cart)) {

                    $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
                    $cart[$id]['sub_total'] =  $cart[$id]['quantity'] *  $cart[$id]['price'];

                    session()->put('cart',$cart);


                } else {

                    $cart[$id]=[
                        'name'=>$product->productName,
                        'image'=>$product->productImage,
                        'price'=>$product->productPrice,
                        'quantity'=>$request->quantity,
                        'sub_total'=>$product->productPrice * (int)request()->quantity
                ];
                    session()->put('cart',$cart);
                }

            }
            notify()->success('Product add to card successfully.', 'Cart');
        }

        else {

            notify()->warning("We have only {$product->quantity} product select the amount of product in stock.", 'Cart');

        }

        return redirect()->back();
    }
    public function cart()
    {
        $cartData=session()->get('cart');
        return view('frontend.pages.cart',compact('cartData'));
    }

    public function remove($id)
    {
        $cart=session()->get('cart');
        unset($cart[$id]);
        session()->put('cart',$cart);
        notify()->success('One item remove successfully.', 'Cart');
        return redirect()->back();
    }

    public function clearCart()
    {
        session()->forget('cart');
        notify()->success('Cart clear successfully.', 'Cart');
        return redirect()->back();
    }
    
}
