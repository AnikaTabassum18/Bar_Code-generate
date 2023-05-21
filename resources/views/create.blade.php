<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate Barcode Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class=".container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <form action="/post" method="POST" class="form">
                    @csrf
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" required name="title">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter Price" required
                        name="price">
                    <label for="description">Description</label>
                    <textarea rows="5" cols="5" class="form-control" id="description" name="description"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
