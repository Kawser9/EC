@extends('backend.master')
@section('content')
<div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">Order Id</th>
            {{-- <th scope="col">Coustomer ID</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Payment </th>
            <th scope="col">Total</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody >
          @foreach ($orders as $order)
              <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->number}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->payment_method}}</td>
                <td>{{$order->total}}</td>
                <td>
                  <a href="{{Route('order.show',$order->id)}}" class="btn btn-primary">Show</a>  
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</div>
  @endsection