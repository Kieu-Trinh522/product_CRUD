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
<h1 class="header-w3ls">
    Thêm mới </h1>
<div class="appointment-w3">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input  type="text" class="top-up" name="product_name" placeholder="Product Name">

                </div>
                <div class="form-left-w3l">
                    <label for="exampleFormControlInput1">Description</label>

                    <input  type="text" name="description" placeholder="description">

                </div>
                <div class="form-left-w3l">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="text" name="price" placeholder="price">

                </div>
                <div class="form-left-w3l">
                    <label for="inputFileName">File Name</label>
                    <input type="file" value="{{old('inputFile')}}"
                           class="form-control-file"
                           id="inputFile"
                           name="inputFile">
                    @if($errors->any())
                        <p style="color: white">{{$errors->first('inputFile')}}</p>
                    @endif
                </div>

            </div>

        </div>

        <div class="btnn">
            <input type="submit" value="Add">
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
