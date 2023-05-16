<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
    <header class="header">
        <div class="logo">
          <a href="#">ModelConstructions</a>
          <div class="search_box">
            <input type="text" placeholder="Search">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
          </div>
        </div>
    
        <div class="header-icons">
          <div class="account">
                               {{-- @if(Auth::guard('admin')->check()) --}}
         
        @auth
        <p>{{ auth()->user()->username }}</p>
    @endauth
    {{-- @endif --}}
    
    
          </div>
        </div>
      </header>
<div class="container">
        <nav>
          <div class="side_navbar">
            <span>Main Menu</span>
            <a href="{{ route('dashboard') }}" >Dashboard</a>
            <a href="employeeinfo.html">Employee Info</a>
            <a href="#">Attendance</a>
            <a href="#">Salary</a>
            <a href="#">Employee Data</a>
            <a href="#" class="active">Help</a>
          </div>
</nav>
<div class="main-body">
    <h2>About Us</h2>
    <p><br>
        Welcome to our construction company, where we specialize in bringing your building dreams to life. Our team of experienced professionals is committed to providing high-quality construction services that are tailored to your specific needs. Whether you need to build a new home, renovate an existing space, or undertake a commercial construction project, we have the expertise and resources to make it happen.</p>
<p>At our construction company, we believe in open communication with our clients to ensure that we fully understand your vision for your project. We work closely with you throughout the entire construction process to make sure that every detail is taken care of and that the final result exceeds your expectations. We use only the best materials and equipment to ensure that your project is built to last.</p>
    <p>Here are our social media channels through which you can contact us:</p>
    <div class="social_icons">
        <a href="https://www.facebook.com/sharvagya.katuwal" target="_blank"><i class="fa-brands fa-2x fa-square-facebook"></i></a>
        <a href="https://msng.link/o/?98060171200=vi" target="_blank"><i class="fa-brands fa-2x fa-viber"></i></a>
        <a href="https://www.instagram.com/sharvagya/" target="_blank"><i class="fa-brands fa-2x fa-instagram"></i></a>
        <a href="mailto:sharvagyak@gmail.com" target="_blank"><i class="fa-solid fa-2x fa-envelope"></i></a>
    </div>
</div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</body>