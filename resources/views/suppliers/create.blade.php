@extends('suppliers.layout')
  
@section('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="pull-left">
            <h2>Supplier Information</h2>
        </div>
        
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">


<form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
    
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif

    @csrf
                <div class="form-row">
                    <div class="col-sm-2 mb-1 ">
                        <small>Firstname</small>
                        <input type="text" name="fname" class="form-control" id="fname">
                    </div>
                    
                    <div class="col-sm-2 mb-1 ">
                        <small>Middlename</small>
                        <input type="text" name="mname" class="form-control" id="mname" >
                    </div>
                    <div class="col-sm-2 mb-1 ">
                        <small>Lastname</small>
                        <input type="text" class="form-control" name="lname" id="lname">
                    </div>

                    
                    <div class="col-sm-6 mb-1 ">
                        <small>Email</small>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email address">
                    </div>
                    
                  
                   
                </div>
                <div class="form-row">
                        <div class="col-md-6 mb-1">
                            <small for="">Company</small>
                            <input type="text" name="company_name" class="form-control" id="company_name">
                        </div>
                        
                        <div class="col-md-2 mb-1">
                            <small for="">Phone</small>
                            <input type="text" name="phone_no" class="form-control" id="phone_no">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Mobile</small>
                            <input type="text" class="form-control" name="mobile_no" id="mobile_no">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Fax</small>
                            <input type="text" class="form-control" name="fax_no" id="fax_no">
                        </div>
                        <div class="col-md-6 mb-1">
                            <small for="">Display name as</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Other</small>
                            <input type="text" class="form-control" name="other" id="other">
                        </div>
                        <div class="col-md-4 mb-1">
                            <small for="">Website</small>
                            <input type="text" class="form-control" name="website" id="website">
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Address</small>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Street" name="street" id="street" rows="2"></textarea>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Billing rate(/hr)</small>
                            <input type="number" class="form-control" id="billing_rate" name="billing_rate">
                            <small for="">Terms</small>
                        </div>
                      
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="city_town" name="city_town" value="" placeholder="City/Town" >
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="state_province" name="state_province" value="" placeholder="State/Province" >
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" class="form-control" id="terms" name="terms">
                        </div>
                        
                        
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="postal_code" name="postal_code"  placeholder="Postal Code">
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="country" name="country" value="" placeholder="Country">
                        </div>
                        
                        <div class="col-md-2 mb-1">
                        <small>Opening balance</small>
                            <input type="text" class="form-control" id="opening_balance" name="opening_balance" >
                        </div>
                        <div class="col-md-2 mb-1">
                        <small>As of</small>
                            <input type="text" class="form-control" id="as_of" name="as_of">
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Notes</small>
                                <textarea class="form-control" name="notes" id="notes" placeholder="Notes" rows="3" ></textarea>
                        </div>
                        <div class="col-md-5">
                        <small>Account no.</small>
                            <input type="text" class="form-control" id="account_no" name="account_no">
                        </div>
                        
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-3 mb-1">
                        <small>TIN no.</small>
                            <input type="text" class="form-control" id="tin_no" name="tin_no" >
                        </div>
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-3 mb-1" style="margin-right:0px;">
                        <small>Default expense account</small>
                            <input type="text" class="form-control" id="default_expense_account" name="default_expense_account" value=""  >
                        </div>
                        
                        
                        
                        
                    </div>
                    
                   
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-2 mb-2 float-right" style="border-radius:15px;;">Save</button>
                
                </form>
            <!--End Form-->
            </div>

@endsection