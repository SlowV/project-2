<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="http://www.cakeshopcafe.com/wp-content/uploads/2016/02/CSC_logo.png" rel="shortcut icon"
          type="http://www.cakeshopcafe.com/wp-content/uploads/2016/02/CSC_logo.png">
    <title>Cake Shop</title>
</head>
<body>
<div class="page-header">
    <h1>CAKE SHOP<small>wellcome to Shop</small></h1>
</div>
<div class="container">
    <div class="row">
        @foreach($products as $item)
            <div class="col-md-4">
                <div>
                    <img src="{{asset('images/' . $item->images)}}" alt="" style="max-height: 150px;">
                </div>
                <div>
                    {{$item -> name}}}
                </div>
                <div>
                    <span style="font-weight: bold;">Giá</span> {{$item-> price}} <span style="font-size: 11px;">vnđ</span>
                </div>
            </div>
        @endforeach
        <div></div>
    </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>