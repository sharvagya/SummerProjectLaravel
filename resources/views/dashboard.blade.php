<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css"/>
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
       
        
        
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="#" class="active">Dashboard</a>
        <a href="employeeinfo.html">Employee Info</a>
        <a href="#">Attendance</a>
        <a href="#">Salary</a>
        <a href="#">Employee Data</a>
        <a href="help.html">Help</a>
        
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <input type="submit" value="logout" class="btn-logout">
      </form>
        
      </div>
    </nav>

    <div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1>ModelConstructions Dashboard</h1>
        <span>Streamlined solution for HR practices</span>
        <button>Learn More</button>
      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Salary Status</h4>
            <a href="#">See all</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Dates</th>
                <th>Name</th>
                <th>Status</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2, Aug, 2022</td>
                <td>Shyam Sundar</td>
                <td>Pending</td>
                <td>Rs.200000</td>
              </tr>
              <tr>
                <td>2</td>
                <td>29, July, 2022</td>
                
                <td>Sharvagya Katuwal</td>
                <td>Paid</td>
                <td>Rs.500000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>15, July, 2022</td>
              
                <td>David Warner</td>
                <td>Paid</td>
                <td>RS.300000</td>
              </tr>
              <tr>
                <td>4</td>
                <td>5, July, 2022</td>
                <td>Ronish Shakya</td>
                <td>Pending</td>
                <td>Rs.700000</td>
              </tr>
              <tr>
                <td>5</td>
                <td>29, June, 2022</td>
                <td>Sujal Pradhan</td>
                <td>Pending</td>
                <td>Rs.4000.00</td>
              </tr>
              <tr>
                <td>6</td>
                <td>28, June, 2022</td>
                <td>Jhon Cena</td>
                <td>Paid</td>
                <td>RS.200000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="list2">
          <div class="row">
            <h4>Documnets</h4>
            <a href="#">Upload</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Uplaoded</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>CNIC</td>
                <td>PDF</td>
                <td>20</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Passport</td>
                <td>PDF</td>
                <td>12</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Licence</td>
                <td>PDF</td>
                <td>9</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Pic</td>
                <td>Jpg</td>
                <td>22</td>
              </tr> 
              <tr>
                <td>5</td>
                <td>CNIC</td>
                <td>Jpg</td>
                <td>22</td>
              </tr> 
              <tr>
                <td>6</td>
                <td>Docx</td>
                <td>Word</td>
                <td>22</td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="sidebar">
      <span>Supervisors</span>
  </div>
  </div>
</body>
</html>
