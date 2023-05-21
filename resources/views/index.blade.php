<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate Barcode Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="col-8 row justify-content-md-center p-5">
        <button type="add" class="btn btn-warning"><a href="/create">Add New Product</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{!! DNS1D::getBarcodeHTML($product->product_code, 'PHARMA') !!}
                        P-{{$product->product_code}}</td>
                    <td>{{$product->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
