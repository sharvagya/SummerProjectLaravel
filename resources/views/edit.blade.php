<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
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
            <a href="#">Salary</a>
            <a href="#">Employee Data</a>
            <a href="help.html">Help</a>
          </div>
          
</nav>
<div class="main-body">
    <div class="form-body">
    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" value="{{ $employee->first_name }}">
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="{{ $employee->last_name }}">
        </div>
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
                <option value="others" {{ $employee->gender == 'others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $employee->date_of_birth }}">
        </div>
        <div>
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ $employee->phone_number }}">
        </div>
        <div>
            <label for="working_title">Working Title</label>
            <input type="text" name="working_title" id="working_title" value="{{ $employee->working_title }}">
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Active" {{ $employee->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ $employee->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                <option value="On Leave" {{ $employee->status == 'on leave' ? 'selected' : '' }}>On Leave</option>
            </select>
        </div>
        <div>
            <label for="address">Address</label>
            <textarea name="address" id="address">{{ $employee->address }}</textarea>
        </div>
        <div>
            <button type="submit">Update Employee</button>
        </div>
    </form>
</div>
</div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</div>
</body>
</html>