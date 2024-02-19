@extends('frontend.master')
@section('content')
<!-- product section -->
<section class="product_section layout_padding">
 <div class="container">
    <div class="heading_container heading_center">
       <h2>
          All <span>products</span>
       </h2>
    </div>
    <div class="row">

        @foreach ($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                        <form method="post" action="{{Route('add.to.cart',$product->id)}}">
                            @csrf
                            <input type="text" value="1" name="quantity" hidden>
                            <button type="submit" class="option1">
                                Add To Cart
                            </button>
                        </form>
                        <a method="post" href="{{Route('add.to.cart',$product->id)}}" class="option2">
                            Buy Now
                        </a>
                        </div>
                    </div>

                    <div class="img-box">
                        @foreach (explode('|', $product ->productImage) as $image)
                                    <br>
                                    <a class="image-popup-vertical-fit" href="{{url('/productImage/' .$image)}}">
                                        <img src="{{url('/productImage/' .$image)}}" >
                                    </a>
                        @endforeach
                    </div>

                    <div class="detail-box">
                        <h5>
                        {{$product->productName}}
                        </h5>
                        <h6>
                            {{$product->productPrice}}
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <div class="btn-box">
       <a href="">
       View All products
       </a>
    </div> --}}
 </div>
</section>
<!-- end product section -->
@endsection
