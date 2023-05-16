<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Info</title>
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
            <a href="index.html" >Dashboard</a>
            <a href="#" class="active">Employee Info</a>
            <a href="#">Attendance</a>
            <a href="{{route('salary')}}">Salary</a>
            <a href="#">Employee Data</a>
            <a href="{{route('help')}}">Help</a>
          </div>
          
</nav>
<div class="main-body">
  <div class="button-options">
   <a href="{{ route('addEmployee') }}"><input type="button" value="Add Employees"></a> 
   <a href="{{ route('viewEmployee') }}"><input type="button" value="View Employees"></a>
  </div>
  </div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</div>
</body>
</html>