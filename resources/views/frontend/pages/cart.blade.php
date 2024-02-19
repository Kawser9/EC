@extends('frontend.master')
@section('content')
<div class="container mt-5">
  <div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Shopping Cart<small> ({{session()->has('cart')?count(session()->get('cart')):0}}) </small></div>
                    <div class="cart_items">
                        <ul class="cart_list">
                          @if ($cartData!=null)
                            @foreach ($cartData as $key=>$cart)
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="{{url('productImage/'.$cart['image'])}}" style="height: 80px; weigth: 100px" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Name</div>
                                        <div class="cart_item_text">{{$cart['name']}}</div>
                                    </div>
                                    {{-- <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Color</div>
                                        <div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
                                    </div> --}}
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <div class="cart_item_text">{{$cart['quantity']}}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Price</div>
                                        <div class="cart_item_text">{{$cart['price']}}   ৳</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Total</div>
                                        <div class="cart_item_text">{{$cart['price'] * $cart['quantity']}}   ৳</div>
                                    </div>
                                    <ul><a href="{{Route('card.item.remove', $key)}}" type="button" ><i class="fa-solid fa-xmark xl" style="color: #ff0a3b;">x</i></a></ul>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <br><br><br>
                    <a href="{{Route('clear.cart')}}" class="btn btn-danger">Clear all</a>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Order Total:</div>
                            <div class="order_total_amount">{{$cartData?array_sum(array_column($cartData,'sub_total')):0}}  ৳</div>
                        </div>
                    </div>
                    <div class="cart_buttons"> <a href="{{Route('allProduct')}}" class="btn btn-secondary"><i class="fas fa-angle-left me-2"></i>Continue Shopping</a>

                      @if (session()->has('cart'))
                        <a href="{{Route('check.out')}}" class="btn btn-danger">Check Out</a>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  </section>

</div>


  <style>
      .order_total {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
  }

  .order_total_content {
    text-align: right;
  }
  .cart_item_header {
    font-weight: bold;
  }
*{margin: 0;padding: 0;-webkit-font-smoothing: antialiased;-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;text-shadow: rgba(0,0,0,.01) 0 0 1px}body{font-family: 'Rubik', sans-serif;font-size: 14px;font-weight: 400;background: #ffffff;color: #000000}ul{list-style: none;margin-bottom: 0px}.button{display: inline-block;background: #d9232d;border-radius: 5px;height: 48px;-webkit-transition: all 200ms ease;-moz-transition: all 200ms ease;-ms-transition: all 200ms ease;-o-transition: all 200ms ease;transition: all 200ms ease}.button a{display: block;font-size: 18px;font-weight: 400;line-height: 48px;color: #FFFFFF;padding-left: 35px;padding-right: 35px}.button:hover{opacity: 0.8}.cart_section{width: 100%;padding-top: 93px;padding-bottom: 111px}.cart_title{font-size: 30px;font-weight: 500}.cart_items{margin-top: 8px}.cart_list{border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);background-color: #fff}.cart_item{width: 100%;padding: 15px;padding-right: 46px}.cart_item_image{width: 133px;height: 133px;float: left}.cart_item_image img{max-width: 100%}.cart_item_info{width: calc(100% - 133px);float: left;padding-top: 18px}.cart_item_name{margin-left: 7.53%}.cart_item_title{font-size: 14px;font-weight: 400;color: rgba(0,0,0,0.5)}.cart_item_text{font-size: 18px;margin-top: 35px}.cart_item_text span{display: inline-block;width: 20px;height: 20px;border-radius: 50%;margin-right: 11px;-webkit-transform: translateY(4px);-moz-transform: translateY(4px);-ms-transform: translateY(4px);-o-transform: translateY(4px);transform: translateY(4px)}.cart_item_price{text-align: right}.cart_item_total{text-align: right}.order_total{width: 100%;height: 60px;margin-top: 30px;border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);padding-right: 46px;padding-left: 15px;background-color: #fff}.order_total_title{display: inline-block;font-size: 14px;color: rgba(0,0,0,0.5);line-height: 60px}.order_total_amount{display: inline-block;font-size: 18px;font-weight: 500;margin-left: 26px;line-height: 60px}.cart_buttons{margin-top: 60px;text-align: right}.cart_button_clear{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 34px;color: rgba(0,0,0,0.5);background: #FFFFFF;border: solid 1px #b2b2b2;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;margin-right: 26px}.cart_button_clear:hover{border-color: #b40000;color: #e40e52}.cart_button_checkout{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 33px;color: #FFFFFF;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;vertical-align: top}
  </style>

@endsection
