<!DOCTYPE html>
<html>
<head>
    <title>Customer Crud</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
</head>
<body>
<div id="mySidebar" class="sidebar">
<a href="javascript:void(0)" style="padding:0px;" class="closebtn" id="closeX" onclick="closeNav()">×</a>
  <a href="/admin/dashboard"><small>Administrator</small></a>
  
  <a href="#">Banking</a>
  <a href="/customers">Customer</a>
  <a href="/suppliers">Supplier</a>
  <a href="#">Employees</a>
  <a href="#">Reports</a>
  <a href="#">Taxes</a>
  <a href="#">Accounting</a>
  <a href="#">Apps</a>
</div>

<div id="main" class="container-fluid">
  <button class="openbtn" onclick="openNav()">☰</button>  

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">QB laravel 8 </a>
           

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/admin/dashboard">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customers">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/suppliers">Suppliers</a>
                        </li>
                    </ul>
                    <h5 style="margin-right:5px;">Privacy</h5>

                        <label class="switch">
                            <input type="checkbox" checked>
                                <span class="slider round"></span>
                        </label>
                        <span class="navbar-text">
                        <button class="btn">
                            <i class="fas fa-search" ></i>
                        </button>

                        <button class="btn">
                            <i class="fas fa-bell"></i>
                        </button>

                        <button class="btn">
                            <i class="fas fa-cog"></i>
                        </button>
                        </span>
                </div>
        </nav>

        <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  
  
}
</script>
  
<div class="container">
    @yield('content')
</div>
   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>