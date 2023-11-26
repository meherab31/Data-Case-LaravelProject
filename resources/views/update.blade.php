<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body align='center'>
    <h1>Update Data</h1>

    <form action="{{ url('update',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $data->name }}"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $data->email }}"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $data->address }}"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $data->phone }}"><br>

        <label for="image">Current Image:</label>
        <img src="/userimg/{{ $data->image }}" alt="Current Image" style="max-width: 100%; height: auto;"><br>

        <label for="new_image">New Image:</label>
        <input type="file" id="new_image" name="new_image"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
