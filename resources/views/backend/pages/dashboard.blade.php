@extends('backend\master')
@section('content')
<div class="container-fluid">

    @php
        $filteredProducts = $stockProduct->where('quantity', '<', 5);
    @endphp
    {{-- @php
        $products = $stockProduct::where('quantity', ' <' ,'5');
    @endphp
    All = {{ $products}} --}}
    <a href="javascript:void(0)" onclick="notificatio()" class="notification" data-toggle="modal" data-target="#stockNotificationModal">
        <span>Stock Notify</span>
        <span class="badge">{{$filteredProducts->count()}}</span>
    </a>
<br><br>
<!-- Modal -->
<div class="modal fade" id="stockNotificationModal" tabindex="-1" role="dialog" aria-labelledby="stockNotificationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stockNotificationModalLabel">Stock Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your notification content here -->
                <p>You have {{$filteredProducts->count()}} new stock notifications.</p>
                <!-- You can customize this based on your needs -->
            </div>
            <div class="modal-body">
                @foreach ($filteredProducts as $product)
                    <p>{{$product->productName}}  <a href="">Update Quantity</a></p>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add additional buttons if needed -->
            </div>
        </div>
    </div>
</div>
{{-- <script>
    function notificatio()
    {
        jQuary.ajax({
            url:
        });
    }
</script> --}}
<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .notification {
        background-color: #ead9d9;
        color: #0f0000;
        text-decoration: none;
        padding: 3px 15px;
        position: relative;
        display: inline-block;
        border-radius: 3px;
            }

    .notification:hover {
        background: rgb(95, 66, 66)
        color: white;
        text-decoration: none;
    }

    .notification .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        padding: 5px 10px;
        border-radius: 50%;
        background: rgb(199, 78, 78);
        color: white;
    }
</style>
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                All Employee</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_all_employee}}</div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-danger" href="{{Route('employee.all.list')}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Active Employee</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$ecount->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-primary" href="{{Route('employee.list')}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Salary (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> TOTAL :{{ $ecount ? number_format($ecount->sum('salary'), 0, ',') : '0,00' }} BDT
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-success" href="{{Route('report.selary.ditails.total')}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Product</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stockProduct ->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-info" href="{{Route('product.list')}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-light shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                All Employee</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_all_employee}}</div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-light" href="{{Route('ajax.index')}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                All Employee</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_all_employee}}</div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-secondary" href="{{Route('employee.all.list')}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
