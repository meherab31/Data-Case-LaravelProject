<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Project - Meherab Hasan</title>
</head>

<body>

    <div align="center" class="container mt-5">
        <h1>Welcome, Meherab Hasan!</h1>
        <p>This is My CRUD project homepage.</p>

        <div align="center" class="card mt-4">
            <div class="card-body">
                <h2>My CRUD Operations</h2>
                    *<a href="{{ url('/create') }}">C for Create User</a>* <br>
                    *<a href="{{ url('/read') }}">R for Read User Data</a>* <br>
                    *<a href="{{ url('/update') }}">U for Update User Data</a>* <br>
                    *<a href="{{ url('/delete') }}">U for Delete User Data</a>* <br>

            </div>
        </div>
    </div>

</body>

</html>
