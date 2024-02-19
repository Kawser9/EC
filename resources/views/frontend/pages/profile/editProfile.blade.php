@extends('frontend.master')
@section('content')

<section class="vh-1000" style="background-color: #ffffff;">
    <div class="container py-5 h-200">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-12 col-lg-10 col-xl-10">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
            <div class="">
                <form action="{{Route('customer.profileUpdate')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{auth()->guard('customer')->user()->name}}" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" value="{{auth()->guard('customer')->user()->address}}" class="form-control" id="address">
                    </div>
                    <div class="mb-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" name="phone" value="{{auth()->guard('customer')->user()->phone}}" class="form-control" id="phone" aria-describedby="name">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                        <button type="submit" class="btn btn-outline-danger me-1 flex-grow-1">Update</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
