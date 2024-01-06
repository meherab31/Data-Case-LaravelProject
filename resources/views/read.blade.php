<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
    <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body class="container text-center">
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Home</a>
    <h1 class="mt-3">Displaying Data from Database</h1>

    <form action="{{ url('search') }}" method="GET" class="mt-3">
        <input type="search" name="search" placeholder="Search Here">
        <input type="submit" value="Search" class="btn btn-secondary">
    </form>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $users)
            <tr>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->address }}</td>
                <td>{{ $users->phone }}</td>
                <td><img height="150" width="150" src="userimg/{{ $users->image }}"> </td>
                <td>
                    <a href="{{url('delete', $users->id)}}" class="btn btn-danger">Delete</a>
                </td>
                <td>
                    <a href="{{url('updatedata', $users->id)}}" class="btn btn-warning">Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>
</html>
