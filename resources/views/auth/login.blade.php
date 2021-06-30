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
    <title>Login</title>
</head>
<body>
    <div class="container" style="margin-left:500px">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset">
                <h4>Login | Page</h4><hr>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="{{route ('auth.check') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email-address" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-primary">Sign-in</button>
                    <br>
                    <a href="{{route('auth.register')}}">I don't have an account, create new</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>