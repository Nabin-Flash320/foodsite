<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chhito mithodi</title>
    <link rel="stylesheet" href="loginpage/css/style.css">
    <link rel="stylesheet" href="loginpage/css/phone.css">
</head>

<body>
    <div class="container">
    <div class="box2">
        <img src="./loginpage/img/back.png" onclick="location.href='{{ route('homepage') }}'">
        <h1 class="head">Login</h1>
        <form class="form" method="post" action="{{ route('homepage') }}">
        @csrf
            <input type="email" name="Email" placeholder="Email">
            <input type="password" name="Password" placeholder="Password">

            <input type="button" value="Log in" class="btn" onclick="location.href='{{ route('homepage') }}'">

        </form>
    <br>
<hr>
    <h3>
        or login with <a class="login" href="http://facebook.com">facebook</a>
    </h3>
    </div>
    </div>
</body>

</html>
