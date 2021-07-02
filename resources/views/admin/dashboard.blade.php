<!DOCTYPE html>
<html lang="en">
<head>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
   
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    
</head>
<body>



                

<div id="mySidebar" class="sidebar">
<a href="javascript:void(0)" style="padding:0px;" class="closebtn" id="closeX" onclick="closeNav()">×</a>
  <a href="/admin/dashboard">{{$AdminLoggedInfo['name']}}<br><small>Administrator</small></a>
  
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
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
       
            
                
                <div class="jumbotron jumbotron">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="card " id="cardView" >
                                    <div class="card-body">
                                        <h5 class="card-title">Profit and Loss <a href="#" class="btn dropdown-toggle" disabled="disabled" style="float:right;color:grey;">Last 30 Days</a></h5>
                                        <h3 class="card-subtitle  mt-4">
                                           <a href="#"  style="text-decoration:none;color:black;">PHP 100,000 </a> 
                                        </h3>
                                        <small >Net Income for last 30 days</small>

                                        <h4 class="card-subtitle  mt-4 ">
                                           <a href="#" style="text-decoration:none;color:black;">PHP 100,000 </a> 
                                        </h4>
                                        <small>Income</small>

                                        <h5 class="card-subtitle  mt-3 ">
                                           <a href="#" style="text-decoration:none;color:black;">PHP 0 </a> 
                                        </h5>
                                        <small>Expenses</small>

                                        
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                            <div class="card " id="cardView" >
                                    <div class="card-body">
                                        <h5 class="card-title">Expenses <a href="#" class="btn dropdown-toggle" disabled="disabled" style="float:right;color:grey;">Last 30 Days</a></h5>
                                        <h3 class="card-subtitle  mt-4">
                                           <a href="#"  style="text-decoration:none;color:black;">PHP 0.00</a> 
                                        </h3>
                                        <small >Total expenses</small>

                                        <h4 class="card-subtitle  mt-4 ">
                                           <a href="#" style="text-decoration:none;color:black;">PHP 0.00 </a> 
                                        </h4>
                                        <small>Other expenses</small>

                                      
                                        
                
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card " id="cardView" >
                                    <div class="card-body">
                                        <h5 class="card-title">Bank Accounts </h5>

                                        <h6 class="card-subtitle  mt-4" style="margin-bottom:50px;">
                                           <a href="#" style="text-decoration:none;color:black;">Cash and cash equivalent </a> <br>
                                           <small>In QuickBoons</small>
                                        </h6>
                                    
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" style="text-decoration:none;">Connect Accounts</a><a href="#" class="btn dropdown-toggle" id="bank_days" disabled="disabled" style="color:grey;margin-left:110px;">Last 30 Days</a>
                                    </div>
                                </div>
                            </div>
                </div> 
                   
</div>


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

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 mt-5">
                <h4>Admin Dashboard</h4>
                
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$AdminLoggedInfo['name']}}
                    </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/suppliers">Suppliers</a>
                    <a class="dropdown-item" href="/customers">Customers</a>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a>
                </div>
                </div>

                    
            </div>
        </div>
    </div> -->



    
   
</body>


</html>