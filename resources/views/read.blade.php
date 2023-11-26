<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
</head>
<body align="center">
    <h1>Displaying Data from Database</h1>
    <form action="{{ url('search') }}" method="GET" >
        <input type="search" name="search" placeholder="Search Here">
        <input type="submit" value="Search">
        <br> <br>
    </form>

        <table border="2px" align="center">
            <tr>
                <td>Username</td>
                <td>Email</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Image</td>
                <td>Delete</td>
                <td>Update</td>
            </tr>
            @foreach ($data as $users)
            <tr>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->address }}</td>
                <td>{{ $users->phone }}</td>
                <td><img height="150" width="150" src="userimg/{{ $users->image }}"> </td>
                <td>
                    <a href="{{url('delete', $users->id)}}">Delete</a>
                </td>
                <td>
                    <a href="{{url('updatedata', $users->id)}}">Update</a>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>
