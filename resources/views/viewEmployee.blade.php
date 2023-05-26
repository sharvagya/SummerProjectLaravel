<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
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
            <a href="{{route('dashboard')}}" >Dashboard</a>
            <a href="#" class="active">Employee Info</a>
            <a href="#">Attendance</a>
            <a href="#">Salary</a>
            <a href="#">Employee Data</a>
            <a href="#" >Help</a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <input type="submit" value="logout" class="btn-logout">
          </form>
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
                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="button-form">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this employee?')"><i class="fa fa-trash"></i></button>
              </form>
              <form action="{{ route('employee.edit', $employee->id) }}" method="POST" class="button-form">
                  @csrf
                  <button type="submit" class="edit-btn"><i class="fa fa-pencil"></i></button>
              </form>
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