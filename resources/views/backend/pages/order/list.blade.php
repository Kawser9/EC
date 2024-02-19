@extends('backend.master')
@section('content')
<table class="orderTable">
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

    </tbody>
  </table>
  @endsection


  @push('js')
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(function () {

      var table = $('.orderTable').DataTable({
          processing: true,
          serverSide: false,
          ajax: "{{ route('order.ajaxList') }}",
          columns: [
              {data: 'id', name: 'id'},
              // {data: 'customer_id', name: 'customer_id'},
              {data: 'name', name: 'name',searchable:true},
              {data: 'email', name: 'email'},
              {data: 'number', name: 'number'},
              {data: 'address', name: 'address'},
              {data: 'payment_method', name: 'payment_method'},
              {data: 'total', name: 'total'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    });
  </script>

  @endpush
