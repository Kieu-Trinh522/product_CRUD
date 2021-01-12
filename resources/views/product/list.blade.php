<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="search-box">
    <form method="post" action="{{route('product.search')}}">
        @csrf
        <input   name="keyword" type="text" placeholder="Search..." required="">

        <input type="submit" value="Search">
    </form>
<form method="post" action="#" enctype="multipart/form-data">
    <div class="card-body">
        <div class="table-responsive">
            <a class="btn btn-success" href="{{route('product.create')}}">Add</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    @foreach($products as $key=>$product)
                        <td>{{+$key}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src="{{$product->image}}" width="100px" height="100px"></td></td>
                        <td><a class="btn btn-primary" href="{{route('product.edit',$product->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('product.destroy',$product->id)}}">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
