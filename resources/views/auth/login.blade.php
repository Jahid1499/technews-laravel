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
            <h4 class="text-muted text-center m-t-0 text-uppercase"><b>Sign In</b></h4>

            <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-7">
                        <a href="{{route('password.request')}}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="{{route('register')}}" class="text-muted">Create an account</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

</body>
</html>
