<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-Comatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/consult_brand.jpg')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/line-awesome/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/line-awesome/css/line-awesome-font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/line-awesome/fonts/line-awesome.svg')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/plugins/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleRegister.css')}}">

    <script src="{{assert('assets/admin/js/core/libraries/jquery.min.js')}}"></script>
    <script src="{{assert('assets/admin/js/core/libraries/bootstrap.min.js')}}"></script>

    <script src="{{assert('js/plugin.js')}}"></script>



</head>
<body>
<div class="container ">
    <div class="row">
        <div class="col-md-8  whole">

            <div class="head col-md-12">
                <img src="{{asset('assets/images/logo/consult_brand.jpg')}}" alt="logo"/>
                <h1>User Login</h1>
                <img src="{{asset('assets/images/logo/zagazig_logo.png')}}" alt="logo"/>
            </div>
            <hr>

            <form action="{{route('auth.check')}}" method="post" class="form-horizontal" >
                @csrf

                @include('user.alerts.errors')


                <div class="form-group row">
                    <label for="email" class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email" placeholder="Enter Email"
                               value="{{old('email')}}">
                        <span class="fa fa-fw fa-envelope-o field-icon "></span>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row" >
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password" placeholder="Enter password"
                               value="{{old('password')}}">
                        <span class="fa fa-fw fa-lock field-icon "></span>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>


                <div class="form-group row">
                    <a href="register" class="col-md-4 "><label for="password" class="control-label">Create an new account now!</label></a>
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary submit" type="submit"><span class="fa fa-fw fa-sign-out submit-icon "></span>Login</button>

                    </div>
                </div>

            </form>


        </div>
    </div>


</div>



</body>
</html>

