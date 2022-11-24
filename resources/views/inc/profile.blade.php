<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/profile.css">

    <title>Dashboard</title>
  </head>
  <body>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <form action="/profile" method="POST">
            @csrf
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button
                class="btn btn-secondary"> <img src="{{$user->profile->image}}" height="100"
                    width="100" /></button> <span class="name mt-3">{{$user->name}}</span> <span
                class="idd">{{$user->email}}</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2" style="margin-top:20px"> <span
                    class="idd1">{{$user->profile->address}}</span> <span><i class="fa fa-copy"></i></span> </div>
                    <div class="text mt-3">{{$user->profile->number}}</div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>
            <div class="text mt-3">{{$user->profile->about}}</div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                        class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                        class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined {{$user->profile->created_at}}</span> </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>
