<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
</head>
<body>

    <div align="center">

        <form action="{{ url('submit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding: 10px;">
                 <label>Name</label>
                 <input type="text" name="name">
            </div>
           <div style="padding: 10px;">
                 <label>Email</label>
                 <input type="email" name="email">
            </div>
            <div style="padding: 10px;">
                <label>Password</label>
                <input type="password" name="password">
           </div>
           <div style="padding: 10px;">
                 <label>Address</label>
                 <input type="text" name="address">
            </div>
            <div style="padding: 10px;">
                <label>Phone Number</label>
                <input type="text" name="phone">
           </div>
           <div style="padding: 10px;">
                 <label>Image</label>
                 <input type="file" name="image">
            </div>
            <div style="padding: 10px;">
                <input type="submit" name="Submit">
           </div>
        </form>

    </div>
</body>
</html>
