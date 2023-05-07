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
            <img src="C:\Users\dell\Desktop\lab2\ModelConstructions\images\user.png" alt="">
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
            <a href="#">Salary</a>
            <a href="#">Employee Data</a>
            <a href="help.html">Help</a>
          </div>
          
</nav>
<div class="main-body">
    <div class="form-body">
    <h1>Employee Details</h1><br>
    @if(session('success'))
    <div class="alert alert-success" style="font-size: 14px; padding: 5px; width: 60%; margin: 0 auto;">{{ session('success') }}</div>

@endif
    <form method="post" action="{{ route('addemployee') }}">
      @csrf
        <div class="form-label">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" required>
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" required>
        <br></div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
        <br>
        <label for="date-of-birth">Date of Birth:</label>
        <input type="date" id="date-of-birth" name="date-of-birth" required>
        <br>
        <div class="form-container">
        <label for="phone-number">Phone Number:</label>
        <input type="text" id="phone-number" name="phone-number" pattern="[0-9]{10}" required>
        <br>
        <label for="working-title">Working Title:</label>
        <input type="text" id="working-title" name="working-title" required>
        <br></div>
        <label for="status">Stauts:</label>
        <select id="status" name="status" required>
            <option value="male">Active</option>
            <option value="female">Inactive</option>
            <option value="others">On Leave</option>
          </select><br>       
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required></textarea>
        <br>
        <input type="submit" value="Submit">
      </form>
    </div>
</div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</div>
</body>
</html>