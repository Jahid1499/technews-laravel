<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Xadmino - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.ico">

    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet" type="text/css">

</head>


<body>

<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">

        <div class="panel-body">
            <h3 class="text-center">
                <span class=""><img src="{{asset('assets')}}/admin/images/logo.png" alt="logo" height="150"></span>
            </h3>
            <h4 class="text-muted text-center m-t-0 text-uppercase"><b>Sign Up</b></h4>

            <form class="form-horizontal m-t-20" action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter user name">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter user email">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12 text-center">
                        <a href="{{route('login')}}" class="text-muted">Already have account?</a>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>

</body>
</html>
