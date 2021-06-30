@extends('customers.layout')
     
@section('content')
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left">
                <h2>Customer table</h2>
            </div>
            <div class="dropdown float-right mb-3 ml-3" >
                    <button class="btn btn-success dropdown-toggle"style="border-radius:20px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/suppliers">Suppliers</a>
                    <a class="dropdown-item" href="/customers">Customers</a>
                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a>
                </div>
                </div>
            <div class="float-right">
                <a type="button" class="btn btn-success mb-4" style="border-radius:20px"  href="{{ route('customers.create') }} ">New Customer</a>
            </div>

        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Open Balance</th>
            <th>Created at</th>
            <th width="230px" style="text-align:center">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
           
            
            <td>{{ $customer->fname }} {{ $customer->mname }} {{ $customer->lname }}<br><small style="color:grey">{{ $customer->company_name }}</small></td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone_no }}
                <br><small style="color:grey">{{ $customer->mobile_no }}</small>
            </td>
            <td>{{ $customer->opening_balance}}</td>
            <td>{{ $customer->created_at->format('D M Y h:i A')}}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
     
                <a style="border-radius:10px" class="btn btn-primary" data-toggle="modal" data-target="#show{{$customer->id}}">
                     Show
                </a>
      
                    <a style="border-radius:10px" class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" style="border-radius:10px" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $customers->links() !!}
       
@endsection