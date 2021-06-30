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
    <title>Registration</title>
</head>
<body>
    <div class="container" style="margin-left:500px">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset">
                <h4>Register | Page</h4><hr>
                <form action="{{route('auth.save')}}" method="POST">

                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger ">
                        {{Session::get('fail')}}
                    </div>
                @endif

                @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email-address" value="{{old('email')}}">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{old('password')}}">
                        <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                    <br>
                    <a href="{{route('auth.login')}}">Already have an account, Sign-in</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>