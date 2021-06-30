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
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html>