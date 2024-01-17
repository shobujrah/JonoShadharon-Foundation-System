
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>J.S Foundation Login Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{url('/backend/login/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" action="{{route('do.login')}}" method="POST">
  @csrf
    <p>
    <input type="email" id="email" name="email" placeholder=" Enter Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="Enter Your Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input style="background-color: green;" type="submit" id="login" value="Login">

    </p>
  </form>
  <div id="create-account-wrap">

</div><!--login-form-wrap-->
<!-- partial -->

</body>
</html>
