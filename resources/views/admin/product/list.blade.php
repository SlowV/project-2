@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="http://www.cakeshopcafe.com/wp-content/uploads/2016/02/CSC_logo.png" rel="shortcut icon"
          type="http://www.cakeshopcafe.com/wp-content/uploads/2016/02/CSC_logo.png">
@stop

@section('title', 'Product List')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{--<img src="{{asset('images/banh-ran-man.png')}}">--}}
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">Ảnh sản phẩm</th>
                        <th style="text-align: center">Mã</th>
                        <th style="text-align: center">Tên</th>
                        <th style="text-align: center">Danh mục</th>
                        <th style="text-align: center">Giới thiệu</th>
                        <th style="text-align: center">Thành phần</th>
                        <th style="text-align: center">Giá</th>
                        <th style="text-align: center">Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $item)
                        <tr>
                            <td><img src="{{asset('images/' . $item->images)}}" alt="" style="max-height: 120px;"></td>
                            <td style="font-size: 13px;">{{$item->id}}</td>
                            <td style="font-size: 13px;">{{$item->name}}</td>
                            <td style="font-size: 13px;">{{$item->CatName}}</td>
                            <td style="font-size: 13px;">{{$item->description}}</td>
                            <td style="font-size: 13px;">{{$item->detail}}</td>
                            <td style="font-size: 13px;">{{$item->price}} <span style="font-size: 11px">vnđ</span></td>
                            <td style="text-align: center">
                                <div>
                                    <button class="btn btn-warning" style="width: 70px;"><a
                                                href="/admin/product/{{$item-> id}}/edit" style="color: #fff;"><i
                                                    class="fas fa-wrench"></i> Sửa</a></button>
                                </div>
                                <div>&nbsp;</div>
                                <div>
                                    <button class="btn btn-danger list-delete"
                                            style="width: 70px;" id="{{$item-> id}}"><i class="far fa-trash-alt"></i>
                                        Xóa
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        var listDeleteButton = document.getElementsByClassName('list-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if (confirm('Bạn có chắc muốn xóa ?')) {
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/admin/product/" + currentId, true);
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Xóa thành công!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
@stop