<!DOCTYPE html>
<html lang="en">
  <head>
    <title>sign up</title>
    <link rel="stylesheet" href="styleL.css" />
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      @if(session('success'))
    <div class="alert alert-success" style="font-size: 14px; padding: 5px; width: 60%; margin: 0 auto;">{{ session('success') }}</div>

@endif
      <form action="{{ route('signup.post') }}" method="post">
        @csrf
        <label>First Name</label>
        <input type="text" placeholder="" id="first_name" name="first_name"/>
        <label>Last Name</label>
        <input type="text" placeholder="" id="last_name" name="last_name"/>
        <label>Email</label>
        <input type="text" placeholder="" id="email" name="email"/>
        <label>Username</label>
        <input type="text" placeholder="" id="username" name="username"/>
        <label>Password</label>
        <input type="password" placeholder="" id="password" name="password"/>
        <input type="submit" value="Submit" />
      <closeform></closeform></form>
          <p class="para-2">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </div>
  </body>
</html>
