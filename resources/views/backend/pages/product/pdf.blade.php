<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .image-popup-vertical-fit img {
            width: 80px;
            height: 120px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Your Company Name</h1>
        <p>Address, City, Country</p>
    </div>

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
                    <td>{{$item->productPrice}}</td>
                    <td>{{$item->quantity}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
