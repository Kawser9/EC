@extends('backend.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product list</h6>
        <div class="right">
            <a href="{{Route('product.excelUpload')}}" class="btn btn-success">Upload Excel</a>
            <a class="btn btn-primary" href="{{Route('product.create')}}">Create</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        {{-- <th>Product ID</th> --}}
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <h3>{{$dataSource}}</h3>
                    @foreach ($products as $item)
                        <tr>
                            {{-- <td>{{$item->id}}</td> --}}
                            <td>{{$item->productCode}}</td>
                            <td>{{$item->productName}}</td>
                            <td>{{$item->productPrice}}</td>
                            <td>{{$item->quantity}}</td>
                            <td style="display: flex;">
                                @foreach (explode('|', $item->productImage) as $image)
                                    <br>
                                    <a class="image-popup-vertical-fit" href="{{url('/productImage/' .$image)}}">
                                        <img src="{{url('/productImage/' .$image)}}" style="width: 20px; height:40px">
                                    </a>
                                @endforeach
                                {{-- <img src="{{url('/uploads/products/'.$item->productImage)}}"style="width: 50px;" alt=""> --}}
                            </td>
                            <td >
                                    <a class="btn btn-primary" href="{{Route('product.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-success" href="{{Route('product.show',$item->id)}}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-danger" href="{{Route('product.delete',$item->id)}}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->links()}}
            <a href="{{Route('product.pdf')}}" class="btn btn-danger">PDF</a>
            <a href="{{Route('product.excel')}}" class="btn btn-success">Excel Download</a>
        </div>
    </div>
</div>
@endsection
