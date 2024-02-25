@extends('backend.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product Upload by Excel</h6>
        <div class="right">
            <a class="btn btn-primary" href="{{Route('product.list')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="card-body">
                <form class="row g-3" id="storeProduct" action="{{Route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputimage" class="form-label">Upload Your Excel</label>
                        <input type="file" name="productExcel" class="form-control" id="">
                    </div>
                    <div class="col-md-12" style="margin-top: 15px">
                        <button type="submit" id="savebtn" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
