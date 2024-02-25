@extends('backend.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product Edit</h6>
        <div class="right">
            <a class="btn btn-primary" href="{{Route('product.list')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="card-body">
                <form class="row g-3" id="storeProduct" action="{{Route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-6">
                        <label for="inputname" class="form-label">Product Name</label>
                        <input type="text" value="{{$product->productName}}" name="productName" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputprice" class="form-label">Product Price</label>
                        <input type="number" value="{{$product->productPrice}}" name="productPrice" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputprice" class="form-label">Product Quantity</label>
                        <input type="number" value="{{$product->quantity}}" name="quantity" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputprice" class="form-label">Product Status</label>
                        {{-- <input type="number" name="quantity" class="form-control" id=""> --}}
                        <select name="status" class="form-control" aria-label="Default select example">
                            {{-- <option value="active" @if ($product->status == 'active') selected @endif >Active</option> --}}
                            <option value="active" @if ($product->status == 'active') selected @endif >Active</option>
                            <option value="unactive" @if ($product->status == 'unactive') selected @endif>Deactivated</option>
                        </select>
                    </div>

                    {{-- <div class="col-md-6">
                        <label for="inputimage" class="form-label">Product Image</label>
                        <input type="file" name="productImage[]" class="form-control" id="" multiple>
                    </div> --}}
                    <div class="col-md-12" style="margin-top: 15px">
                        <button type="submit" id="savebtn" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

            <div id="productList">

            </div>
        </div>
    </div>
</div>
@endsection
