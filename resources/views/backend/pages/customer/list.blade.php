@extends('backend.master')
@section('content')
<table class="customerTable">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
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

      var table = $('.customerTable').DataTable({
          processing: true,
          serverSide: false,
          ajax: "{{ route('customer.ajaxList') }}",

          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name',searchable:true},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'address', name: 'address'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

       // Auto-reload the DataTable every second
        // setInterval(function () {
        // table.ajax.reload();
        // }, 10000); 
    });
  </script>

  @endpush
