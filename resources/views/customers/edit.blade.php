@extends('customers.layout')
     
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="pull-left">
            <h2>Edit Customer Information</h2>
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


<form action="{{ route('customers.update',$customer->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
                <div class="form-row">
                    <div class="col-sm-2 mb-1 ">
                        <small>Firstname</small>
                        <input type="text" name="customer_fname" class="form-control" id="customer_fname" value="{{$customer->customer_fname}}">
                    </div>
                    
                    <div class="col-sm-2 mb-1 ">
                        <small>Middlename</small>
                        <input type="text" name="customer_mname" class="form-control" id="customer_mname" value="{{$customer->customer_mname}}">
                    </div>
                    <div class="col-sm-2 mb-1 ">
                        <small>Lastname</small>
                        <input type="text" class="form-control" name="customer_lname" id="customer_lname" value="{{$customer->customer_lname}}">
                    </div>

                    
                    <div class="col-sm-6 mb-1 ">
                        <small>Email</small>
                        <input type="text" class="form-control" name="customer_email" id="customer_email" placeholder="Email address" value="{{$customer->customer_email}}">
                    </div>
                    
                  
                   
                </div>
                <div class="form-row">
                        <div class="col-md-6 mb-1">
                            <small for="">Company</small>
                            <input type="text" name="customer_company_name" class="form-control" id="customer_company_name" value="{{$customer->customer_company_name}}">
                        </div>
                        
                        <div class="col-md-2 mb-1">
                            <small for="">Phone</small>
                            <input type="text" name="customer_phone_no" class="form-control" id="customer_phone_no" value="{{$customer->customer_phone_no}}">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Mobile</small>
                            <input type="text" class="form-control" name="customer_mobile_no" id="customer_mobile_no" value="{{$customer->customer_mobile_no}}">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Fax</small>
                            <input type="text" class="form-control" name="customer_fax_no" id="customer_fax_no" value="{{$customer->customer_fax_no}}">
                        </div>
                        <div class="col-md-6 mb-1">
                            <small for="">Display name as</small>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Other</small>
                            <input type="text" class="form-control" name="customer_other" id="customer_other" value="{{$customer->customer_other}}">
                        </div>
                        <div class="col-md-4 mb-1">
                            <small for="">Website</small>
                            <input type="text" class="form-control" name="customer_website" id="customer_website" value="{{$customer->customer_website}}">
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Address</small>
                                <textarea class="form-control"  placeholder="Street" name="customer_street" id="customer_street" rows="2">{{$customer->customer_street}}</textarea>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Billing rate(/hr)</small>
                            <input type="number" class="form-control" id="customer_billing_rate" name="customer_billing_rate" value="{{$customer->customer_billing_rate}}">
                            <small for="">Terms</small>
                        </div>
                      
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="customer_city_town" name="customer_city_town" value="{{$customer->customer_city_town}}" placeholder="City/Town" >
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="customer_state_province" name="customer_state_province" value="{{$customer->customer_state_province}}" placeholder="State/Province" >
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" class="form-control" id="customer_terms" name="customer_terms" value="{{$customer->customer_terms}}">
                        </div>
                        
                        
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="customer_postal_code" name="customer_postal_code" value="{{$customer->customer_postal_code}}"  placeholder="Postal Code">
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="customer_country" name="customer_country" value="{{$customer->customer_country}}" placeholder="Country">
                        </div>
                        
                        <div class="col-md-2 mb-1">
                        <small>Opening balance</small>
                            <input type="text" class="form-control" id="customer_opening_balance" value="{{$customer->customer_opening_balance}}" name="customer_opening_balance" >
                        </div>
                        <div class="col-md-2 mb-1">
                        <small>As of</small>
                            <input type="text" class="form-control" id="customer_as_of" value="{{$customer->customer_as_of}}" name="customer_as_of">
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Notes</small>
                                <textarea class="form-control" name="customer_notes" id="customer_notes" placeholder="Notes" rows="3" >{{$customer->customer_notes}}</textarea>
                        </div>
                        <div class="col-md-5">
                        <small>Account no.</small>
                            <input type="text" class="form-control" id="customer_account_no" value="{{$customer->customer_account_no}}" name="customer_account_no">
                        </div>
                        
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-3 mb-1">
                        <small>TIN no.</small>
                            <input type="text" class="form-control" id="customer_tin_no" name="customer_tin_no" value="{{$customer->customer_tin_no}}" >
                        </div>
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-4 mb-1">
                        <small>Default expense account</small>
                            <input type="text" class="form-control" id="customer_default_expense_account" value="{{$customer->customer_default_expense_account}}" name="customer_default_expense_account" >
                        </div>   
                    </div>
                    
                   
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-2 mb-2 float-right" style="border-radius:15px;;">Update</button>
                </form>
            <!--End Form-->
            </div>

@endsection