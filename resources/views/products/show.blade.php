<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show product</title>
    <link href="../../css/show.css" rel="stylesheet" media="all">

</head>
<body>

<div style="margin-left:480px">
    <p class="name">{{ $product->name }}</p>
    <hr />
    <img src="{{asset('imgs/offers/'.$product->image)}}">
    <p>Price: ${{$product->price}}</p>
    <p>Discount: {{$product->Discount->percent}}%</p>
    <p>For: {{$product->gender}}</p>
    <p>Category: {{$product->Category->name}}</p>
    <p>Description: {{$product->description}}</p>
</div>
</body>
</html>
