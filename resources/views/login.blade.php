<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="styleL.css"/>
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <label>Username</label>
        <input type="text" name="username" id="username"  placeholder="" />
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="" />
        <input type="submit" value="Submit" />
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="{{ route('signup') }}">Sign Up Here</a>
    </p>
  </body>
</html>

