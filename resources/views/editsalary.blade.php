<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Salary</title>
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
            <a href="{{ route('dashboard') }}" >Dashboard</a>
            <a href="employeeinfo.html">Employee Info</a>
            <a href="#">Attendance</a>
            <a href="#">Salary</a>
            <a href="#">Employee Data</a>
            <a href="#" class="active">Help</a>
          </div>
</nav>
<div class="main-body">
    <h2>Edit Salary Record for {{ $salary->employee->first_name }} {{ $salary->employee->last_name }}</h2>
   <hr>
   <form action="{{ route('salary.update', $salary->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" value="{{ $salary->date }}">
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="Pending" @if($salary->status == 'Pending') selected @endif>Pending</option>
            <option value="Approved" @if($salary->status == 'Approved') selected @endif>Approved</option>
            <option value="Paid" @if($salary->status == 'Paid') selected @endif>Paid</option>
        </select>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" class="form-control" name="amount" value="{{ $salary->amount }}">
    </div>

    <button type="submit" class="btn btn-primary">Update Salary Record</button>
</form>
</div>

</div>
<div class="sidebar">
    <span>Supervisors</span>
</div>
</body>