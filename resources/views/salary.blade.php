<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Salary</title>
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
            <a href="#" class="active">Salary</a>
            <a href="#">Employee Data</a>
            <a href="{{ route('help') }}" >Help</a>
          </div>
</nav>
<div class="main-body">
  <h1>Salary List</h1>
  <div class="salary-table">
  <table class="sal-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Name</th>
            <th>Status</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($salaries as $salary)
            <tr>
                <td>{{ $salary->id }}</td>
                <td>{{ $salary->date }}</td>
                <td>{{ $salary->employee->first_name }} {{ $salary->employee->last_name }}</td>
                <td>{{ $salary->status }}</td>
                <td>{{ $salary->amount }}</td>
                <td>
                  <form action="{{ route('salary.destroy', $salary->id) }}" method="POST" class="button-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this salary record?')"><i class="fa fa-trash"></i></button>
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                  <a href="{{ route('salary.edit', $salary->id) }}" cmethod="GET" class="button-form">
                    @csrf
                    <button type="submit" class="edit-btn"><i class="fa fa-pencil"></i></button>
                  </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
  
  </div>
</div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</body>