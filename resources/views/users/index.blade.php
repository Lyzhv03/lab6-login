<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Trang admin</h1>
        @auth
        <p>Xin chao : {{Auth::user()->username}}</p>
        <a href="{{route('logout')}}">LogOut</a>

        @endauth
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Role</th>
                    <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)

                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $item->avatar) }}" width="50" alt="">
                        </td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->active }}</td>
                        <td class="d-flex gap-1">
                            <a href="" class="btn btn-primary">Edit</a>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Bạn có muốn xóa không?')" type="submit"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
