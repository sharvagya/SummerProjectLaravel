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
  <h1>Salary List</h1>
  <div class="salary-table">
  <table class="table">
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
                  <form action="{{ route('salary.destroy', $salary->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="salary_id" value="{{ $salary->id }}">
                    <button type="submit" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                  <a href="{{ route('salary.edit', $salary->id) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i>
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