<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visit User-data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered shadow texc-center table-striped mt-5">
            <tr>
                <th>Id</th>
                <th>File No</th>
                <th>Member Name</th>
                <th>Email</th>
                <th>Delete Member</th>
                <th>Edit</th>
            </tr>
            @foreach($users as $user) <!--for each users in the data table-->
            <tr>
                <td>{{ $user ->id }}</td>
                <td>{{ $user ->file_no }}</td>
                <td>{{ $user ->member_name }}</td>
                <td>{{ $user ->email }}</td>
                <td><a href="/delete/{{ $user ->id }}" class="btn btn-danger">Delete</a></td> <!-- for delete -->
                <td><a href="/edit/{{ $user ->id }}" class="btn btn-success">Update</a></td> <!-- for update -->
            </tr>
            @endforeach
        </table>

    </div>
</body>
</html>