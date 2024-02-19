@extends('frontend.master')
@section('content')

<div class="container mt-5">
    <div class="cart_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_title">Check Out Shopping<small> ({{ session()->has('cart') ? count(session()->get('cart')) : 0 }}) </small></div>
                        <div class="cart_items">
                            <ul class="cart_list">
                                <div class="row g-5">
                                    <div class="col-md-5 col-lg-4 order-md-last">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-primary">Your cart</span>
                                            <span class="badge bg-primary rounded-pill">{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            @if (session()->has('cart'))
                                                @foreach (session()->get('cart') as $cart)
                                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                                        <div>
                                                            <h6 class="my-0">{{ $cart['name'] }}</h6>
                                                            <small class="text-muted">{{ $cart['quantity'] }}</small>
                                                        </div>
                                                        <span class="text-muted">{{ $cart['sub_total'] }} ৳</span>
                                                    </li>
                                                @endforeach
                                            @endif

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total (৳)</span>
                                                <strong>{{ session()->has('cart') ? array_sum(array_column(session()->get('cart'), 'sub_total')) : 0 }} ৳</strong>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-7 col-lg-8">
                                        <h4 class="mb-3">Delivery Address</h4>

                                        <form class="needs-validation" action="{{ route('place.order') }}" method="post">
                                            @csrf
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input name="name" type="text" class="form-control" id="name" placeholder="" value="" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input name="address" type="text" class="form-control" id="address" placeholder="" value="" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="number" class="form-label">Phone</label>
                                                    <input name="number" type="text" class="form-control" id="number" placeholder="" value="" required>
                                                </div>

                                            </div>

                                            <h4 class="mb-3">Payment</h4>

                                            <div class="my-3">
                                                <div class="form-check">
                                                    <input id="credit" value="COD" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                                    <label class="form-check-label" for="credit">COD</label>
                                                </div>
                                                <div class="form-check">
                                                    <input id="debit" value="SSL" name="paymentMethod" type="radio" class="form-check-input" required>
                                                    <label class="form-check-label" for="debit">SSL</label>
                                                </div>
                                            </div>
                                            <div class="">
                                                <button href="{{ route('allProduct') }}" class="btn btn-secondary"><i class="fas fa-angle-left me-2"></i>Continue Shopping</button>
                                                <button type="submit" class="btn btn-secondary">Place Order</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
