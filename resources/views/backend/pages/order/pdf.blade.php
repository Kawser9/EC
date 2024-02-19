<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="content-page">
        <div class="content">
                <div class="row">
                    <div class="col-lg-12" id="printslip">
                        <div style="text-align: center;">
                            <h1>E-commerce</h1>
                            <p>Ghulshan 2, Dhaka 1230</p>
                            <h2>Order # {{$order->id}}</h2>
                            <p>{{auth()->user()->name}}</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Shipping Information</h4>
                                        <h5> Name: {{$order->name}}</h5>
                                        <address class="mb-0 font-14 address-lg">
                                            Address: {{$order->address}}<br>
                                            <abbr title="Email:">E:</abbr> {{$order->email}} <br/>
                                            <abbr title="Mobile">M:</abbr> {{$order->number}}
                                        </address>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Billing Information</h4>
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="fw-bold me-2">Payment Type:</span> {{$order->payment_method}}</p>
                                                {{-- <p class="mb-2"><span class="fw-bold me-2">Provider:</span> Visa ending in 2851</p> --}}
                                                <p class="mb-2"><span class="fw-bold me-2">Date:</span> {{$order->created_at}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <div class="card">
                            <div class="card-body">
                                <p class="header-title mb-1">Order Status: PENDING</p>
                                <p class="header-title mb-1">Payment Status: PAID</p>
    
                                  <br><br>
    
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                <td>{{$item->price}} BDT</td>
                                                <td>{{$item->subtotal}} BDT</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                                <td><strong>{{$order->total}} BDT</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- end table-responsive -->
                                
                            </div>
                        </div>
                        
        
                    </div> 
                
        </div> <!-- container -->
    
    </div> <!-- content -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
