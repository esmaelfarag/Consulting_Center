<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-Comatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap-4/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 45px;">
        <div class="offset-3 col-md-6">
            <h4>Profile</h4>
            <hr>
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$LoggedUserInfo->name_en}}</td>
                        <td>{{$LoggedUserInfo->email}}</td>
                        <td><a href="logout">Logout</a> </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>

