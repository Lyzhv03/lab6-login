<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content" style="text-align:center ; border:1pxs">
            <h2>Thông tin chi tiết </h2>

            @auth
            {{Auth::user()->username}}
            {{-- <form  action="{{ route('user.detail') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <img id="img" src="{{asset('storage/'. Auth::user()->avatar )}}" width="100px" alt="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fullname</label>
                    <input type="text" class="form-control" style="background: antiquewhite" name="fullname"
                    value="{{Auth::user()->fullname}}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fullname</label>
                    <input type="text" class="form-control" style="background: antiquewhite" name="fullname"
                    value="{{Auth::user()->username}}" readonly>
                </div>
                <div class="mb-b">
                    <a href="" class="btn btn-warning">Edit movie</a>
                </div>
            </form> --}}
            <a href="{{route('logout')}}">LogOut</a>
            @endauth
        </div>
    </div>
</body>
</html>
