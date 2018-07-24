@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="http://www.cakeshopcafe.com/wp-content/uploads/2016/02/CSC_logo.png" rel="shortcut icon"
          type="http://www.cakeshopcafe.com/wp-content/uploads/2016/02/CSC_logo.png">
@stop
@section('title', 'Create product')
<body>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sửa thông tin sản phẩm</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-4 offset-4">
                                <form action="/admin/product/{{$product-> id}}" method="post">
                                    @method('PUT')
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <div class="form-group">
                                        <label>Tên sản phẩm: </label>
                                        <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Danh mục: </label>
                                        <select name="categoryId" class="form-control" id="sel1">
                                            @foreach($category as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá:</label>
                                        <input type="text" name="price" id="" class="form-control" value="{{$product -> price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Thông tin:</label>
                                        <input type="text" name="description" id="" class="form-control" value="{{$product->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm:</label>
                                        <input type="text" name="image" id="" class="form-control" value="{{$product->images}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Chi tiết:</label>
                                        <input type="text" name="detail" id="" class="form-control" value="{{$product->detail}}">
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-success" type="submit" name="submit">Đăng tải</button>
                                        &nbsp;
                                        <button type="reset" class="btn btn-danger" name="reset">Làm mới</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    // các mục gợi ý cho ng dùng khi tạo sp mới.
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
@stop
</body>
</html>