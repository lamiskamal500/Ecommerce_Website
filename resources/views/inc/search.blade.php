@extends('layouts.index')

@section('content')
@foreach ($clothes_3 as $c3)
<div class="col" style="margin-left:600px;">
    <div class="cont">
        <img class="all" src="{{$c3->image}}">
        <div class="middle">
            <button class="view"><a href=""><i class="fa fa-eye"></i></a></button>
        </div>
        <div class="price">${{$c3->price}}</div>
    </div>
    <p class="product_name">{{$c3->name}}</p>
    <div class="rating" style="display: flex;
    transform: translate(-85%,-85%) rotateY(180deg);
">
        <input type="radio" name="star" id="star1">
        <label for="star1"></label>
        <input type="radio" name="star" id="star2">
        <label for="star2"></label>
        <input type="radio" name="star" id="star3">
        <label for="star3"></label>
        <input type="radio" name="star" id="star4">
        <label for="star4"></label>
        <input type="radio" name="star" id="star5">
        <label for="star5"></label>
    </div>
    <div class="btns">
      <button class="like"><i class="fa-solid fa-heart"></i></button>
        <button class="share"><i class="fa-sharp fa-solid fa-share-nodes"></i></button>
        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$c3->id}}">
            <button class="cart"><i class="fa-sharp fa-solid fa-cart-shopping"></i></button>
    </form>
    </div>
</div>
@endforeach
@endsection
