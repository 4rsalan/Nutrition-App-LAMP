<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

</head>
<body class="sky">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">COMP1230 Assignment Two</a>
    <ul class="nav navbar-nav ml-auto">
        @if(Session::has('SignedIn'))
            <form method="post" action="{{url('signout')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="nav-link btn btn-link">Sign Out</button>
            </form>
        @else
            <li ><a href="{{url('/register')}}" class="nav-link">Register</a></li>
            <li ><a href="{{url('/login')}}" class="nav-link">Sign In</a></li>
        @endif
    </ul>
</nav>

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
    </div>
@endif

@if ((count($errors) > 0))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Please check the following errors:
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    @yield('content')
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>
</html>﻿