<!-- Start trending item section -->
<section class="trending_items">
    <!-- start header -->
  <div class="trending_header">
    <hr>
    <p>Trending Item</p>
    <hr>
  </div>
  <!-- End header -->
  <div class="container m-5">
    <div class="row" style="margin-left: 12px;">
        @foreach ($clothes as $c)
        <div class="col">
            <div class="cont">
                <img class="all" src="{{$c->image}}">
                <div class="middle">
                    <button class="view"><a href=""><i class="fa fa-eye"></i></a></button>
                </div>
                <div class="price">${{$c->price}}</div>
            </div>
            <p class="product_name">{{$c->name}}</p>
            <div class="rating">
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
                    <input type="hidden" name="product_id" value="{{$c->id}}">
                    <button class="cart"><i class="fa-sharp fa-solid fa-cart-shopping"></i></button>
            </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row" style="margin-left: 12px; margin-top: 20px;">
        @foreach ($clothes_2 as $c2)
        <div class="col">
            <div class="cont">
                <img class="all" src="{{$c2->image}}">
                <div class="middle">
                    <button class="view"><a href=""><i class="fa fa-eye"></i></a></button>
                </div>
                <div class="price">${{$c2->price}}</div>
            </div>
            <p class="product_name">{{$c2->name}}</p>
            <div class="rating">
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
                    <input type="hidden" name="product_id" value="{{$c2->id}}">
                    <button class="cart"><i class="fa-sharp fa-solid fa-cart-shopping"></i></button>
            </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
  <button class="btn_load">LOAD MORE</button>
</section>
  <!-- End trending item section -->
