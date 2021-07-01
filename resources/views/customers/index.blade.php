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
            <div class="dropdown float-right mb-3 ml-3">
                    <button class="btn btn-success dropdown-toggle" style="border-radius:20px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
           
            
            <td>{{ $customer->customer_fname }} {{ $customer->customer_mname }} {{ $customer->customer_lname }}<br><small style="color:grey">{{ $customer->customer_company_name }}</small></td>
            <td>{{ $customer->customer_email }}</td>
            <td>{{ $customer->customer_phone_no }}
                <br><small style="color:grey">{{ $customer->customer_mobile_no }}</small>
            </td>
            <td>{{ $customer->customer_opening_balance}}</td>
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

 @foreach($customers_details as $customer)
<!--Start Modal-->
<div class="modal fade" id="show{{$customer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <div class="modal-body">
                <div class="container">
                
            <!--Start Form-->
                    <form>
                <div class="form-row">
                    <div class="col-sm-2 mb-1 ">
                        <small>Firstname</small>
                        <input type="text" class="form-control" id="" value="{{$customer->customer_fname}}" readonly>
                    </div>
                    
                    <div class="col-sm-2 mb-1 ">
                        <small>Middlename</small>
                        <input type="text" class="form-control" id="" value="{{$customer->customer_mname}}" readonly>
                    </div>
                    <div class="col-sm-2 mb-1 ">
                        <small>Lastname</small>
                        <input type="text" class="form-control" id="" value="{{$customer->customer_lname}}" readonly>
                    </div>

                    
                    <div class="col-sm-6 mb-1 ">
                        <small>Email</small>
                        <input type="text" class="form-control" id="" value="{{$customer->customer_email}}" readonly>
                    </div>
                    
                  
                   
                </div>
                <div class="form-row">
                        <div class="col-md-6 mb-1">
                            <small for="">Company</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_company_name}}" readonly>
                        </div>
                        
                        <div class="col-md-2 mb-1">
                            <small for="">Phone</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_phone_no}}" readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Mobile</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_mobile_no}}" readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Fax</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_fax_no}}" readonly>
                        </div>
                        <div class="col-md-6 mb-1">
                            <small for="">Display name as</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_name}}" readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Other</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_other}}" readonly>
                        </div>
                        <div class="col-md-4 mb-1">
                            <small for="">Website</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_website}}" readonly>
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Address</small>
                                <textarea class="form-control"   rows="2" readonly>{{$customer->customer_street}}</textarea>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Billing rate(/hr)</small>
                            <input type="number" class="form-control" id="" value="{{$customer->customer_billing_rate}}" readonly>
                            <small for="">Terms</small>
                        </div>
                      
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$customer->customer_city_town}}" placeholder="City/Town" readonly>
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$customer->customer_state_province}}" placeholder="State/Province" readonly>
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" class="form-control" id="" value="{{$customer->customer_terms}}" readonly>
                        </div>
                        
                        
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$customer->customer_postal_code}}" placeholder="Postal Code" readonly>
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$customer->customer_country}}" placeholder="Country" readonly>
                        </div>
                        
                        <div class="col-md-2 mb-1">
                        <small>Opening balance</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_opening_balance}}"  readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                        <small>As of</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_as_of}}"  readonly>
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Notes</small>
                                <textarea class="form-control"  placeholder="Notes" rows="3" readonly>{{$customer->customer_notes}}</textarea>
                        </div>
                        <div class="col-md-5">
                        <small>Account no.</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_account_no}}"  readonly>
                        </div>
                        
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-3 mb-1">
                        <small>TIN no.</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_tin_no}}"  readonly>
                        </div>
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-4 mb-3">
                        <small>Default expense account</small>
                            <input type="text" class="form-control" id="" value="{{$customer->customer_default_expense_account}}"  readonly>
                        </div>   
                    </div>

                </form>
            <!--End Form-->
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary"  style="border-radius:15px;border:1px solid grey;width:90px;color:black;height:40px">Cancel</button>
                    <button type="button" class="btn btn-outline-secondary"  style="border-radius:15px;border:1px solid grey;width:150px;color:black;height:40px">Make inactive</button>
                    <button type="button" class="btn btn-success" style="border-radius:15px;margin-left:400px;">Save</button>
                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>
<!--End Modal-->
@endforeach

    {!! $customers->links() !!}
       
       @endsection
