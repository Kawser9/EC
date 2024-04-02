@extends('backend.master')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Order Details | <a href="{{Route('allOrder.list')}}">Back</a></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end row -->
            <form action="{{Route('order.update',$order->id)}}" method="post">
                @csrf
                @method('put')
                <label  for="">Order Status : </label>
                <div class="btn-group">
                    <select name="order_status" class="form-control" aria-label="Default select example">
                              <option value="">Select Status</option>
                              <option {{ $order->order_status == 'pending' ? 'selected' : 'hidden' }} value="pending">Pending</option>
                              {{-- <option @if ($order->order_status == 'confirmed') hidden @endif @if ($order->order_status == 'pending') selected @endif value="pending">Pending</option> --}}
                              <option @if ($order->order_status == 'confirmed') selected @endif value="confirmed">Confirmed</option>
                              <option @if ($order->order_status == 'packed') selected @endif value="packed">Packed</option>
                              <option @if ($order->order_status == 'shipped') selected @endif value="shipped">Shipped</option>
                              <option @if ($order->order_status == 'delivered') selected @endif value="delivered">Delivered</option>
                    </select>
                </div>
                <label for="">Payment Status : </label>
                <div class="btn-group">
                    <select name="payment_status" class="form-control" aria-label="Default select example">
                              <option value="pending">Pending</option>
                              <option value="paid">Paid</option>
                              <option value="VALID">VALID</option>
                    </select>
                </div>
                <br>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>


            <br>
            @if ($order->order_status =='pending')
                <span> This order is still pending you can't print the invoice.</span>
            @else
                <a href="{{Route('order.pdf',$order->id)}}" class="btn btn-success">PDF Invoice</a>
            @endif
            <br><br>

            <div class="row">
                <div class="col-lg-12" id="printslip">
                    <div class="card">
                        <div class="card-body">

                              <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderDetails as $item)
                                        <tr>
                                            <td>{{$item->product->productName}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->price}} ৳</td>
                                            <td>{{$item->subtotal}} ৳</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                            <td><strong>{{$order->total}} ৳</strong></td>
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>

                            <!-- end table-responsive -->

                        </div>
                    </div>




        </div> <!-- container -->

    </div> <!-- content -->


</div>

@endsection
