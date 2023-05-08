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
            <img src="C:\Users\dell\Desktop\lab2\ModelConstructions\images\user.png" alt="">
          </div>
        </div>
      </header>
<div class="container">
        <nav>
          <div class="side_navbar">
            <span>Main Menu</span>
            <a href="index.html" >Dashboard</a>
            <a href="employeeinfo.html">Employee Info</a>
            <a href="#">Attendance</a>
            <a href="#">Salary</a>
            <a href="#">Employee Data</a>
            <a href="#" class="active">Help</a>
          </div>
</nav>
<div class="main-body">
  <h1>Employee List</h1>

  <table>
      <thead>
          <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Phone Number</th>
              <th>Working Title</th>
              <th>Status</th>
              <th>Address</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($employees as $employee)
          <tr>
              <td>{{ $employee->first_name }}</td>
              <td>{{ $employee->last_name }}</td>
              <td>{{ $employee->gender }}</td>
              <td>{{ $employee->date_of_birth }}</td>
              <td>{{ $employee->phone_number }}</td>
              <td>{{ $employee->working_title }}</td>
              <td>{{ $employee->status }}</td>
              <td>{{ $employee->address }}</td>
              <td>
                  <a href="{{ route('employee.edit', $employee->id) }}">Edit</a> |
                  <a href="{{ route('employee.delete', $employee->id) }}">Delete</a>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  
</div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</body>