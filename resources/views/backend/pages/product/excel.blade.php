<table>
    <thead>
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{$item->productCode}}</td>
                <td>{{$item->productName}}</td>
                <td>{{$item->productPrice}} BDT</td>
                <td>{{$item->quantity}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
