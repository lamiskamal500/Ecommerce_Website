<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Dashboard</title>
  </head>
  <body>


  <div class="content">

    <div class="container">
      <h2 class="mb-5">Dashboard</h2>
      <div class="table-responsive">

        <a href="{{ route('products.create') }}"><button class="button4" role="button">Add</button></a>

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Category</th>
              <th scope="col">Discount</th>
              <th scope="col">Description</th>
              <th scope="col">Photo</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php($no=1)
            @foreach ($product as $p)
            <tr scope="row">
                      <td>{{ $no++ }}</td>
                      <td>{{ $p->name }}</a></td>
                      <td>{{ $p->price }}</td>
                      <td>{{ $p->Category->name }}</td>
                      <td>{{ $p->Discount->name }}</td>
                      <td>{{ $p->description }}</td>
                      <td><img src="{{asset('imgs/offers/'.$p->image)}}" style="height: 150px; width:200px"></td>
                      <td>
                        <div class="btns">
                        <a href="{{ route('products.show', $p->id) }}"><button class="button1" role="button">View</button></a>
                        <form action="{{ route('products.destroy', $p->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="button3"/>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
