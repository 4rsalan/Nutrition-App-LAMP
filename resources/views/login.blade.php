<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="sky">

<div class="text-center">
    <form method="post" action="{{url('LoggedIn')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h2>Log in</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log In</button>
        <a class="btn btn-danger btn-block" href="../index.php">Go Back</a>
    </form>
</div>
</body>
</html>
