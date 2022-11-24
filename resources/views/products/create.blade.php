<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../../css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Add Product</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="price" id="price">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
                                <select name="category_id" id="category" class="form-select" aria-label="category">
                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Discount</div>
                            <div class="value">
                                <select name="discount_id" id="discount" class="form-select" aria-label="discount">
                                    @foreach($discounts as $d)
                                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="description" placeholder="Write Content" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-6" name="gender" id="gender"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" >
                            <div class="name">Photo</div>
                            <div class="value">
                                <input class="input--style-6" type="file" name="image" id="image">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn1" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="../../js/global.js"></script>

</body>

</html>
<!-- end document-->
