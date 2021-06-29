@extends('suppliers.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left">
                <h2>Supplier table</h2>
            </div>
            
            <div class="float-right">
                <a type="button" class="btn btn-success mb-4" style="border-radius:20px"  href="{{ route('suppliers.create') }} ">New Supplier</a>
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
        @foreach ($suppliers as $supplier)
        <tr>
           
            
            <td>{{ $supplier->fname }} {{ $supplier->mname }} {{ $supplier->lname }}<br><small style="color:grey">{{ $supplier->company_name }}</small></td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->phone_no }}
                <br><small style="color:grey">{{ $supplier->mobile_no }}</small>
            </td>
            <td>{{ $supplier->opening_balance}}</td>
            <td>{{ $supplier->created_at->format('D M Y h:i A')}}</td>
            <td>
                <form action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">
     
                <a style="border-radius:10px" class="btn btn-primary" data-toggle="modal" data-target="#show{{$supplier->id}}">
                     Show
                </a>
      
                    <a style="border-radius:10px" class="btn btn-primary" href="{{ route('suppliers.edit',$supplier->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" style="border-radius:10px" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@foreach($supplier_details as $supplier)
<!--Start Modal-->
<div class="modal fade" id="show{{$supplier->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supplier Information</h5>
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
                        <input type="text" class="form-control" id="" value="{{$supplier->fname}}" readonly>
                    </div>
                    
                    <div class="col-sm-2 mb-1 ">
                        <small>Middlename</small>
                        <input type="text" class="form-control" id="" value="{{$supplier->mname}}" readonly>
                    </div>
                    <div class="col-sm-2 mb-1 ">
                        <small>Lastname</small>
                        <input type="text" class="form-control" id="" value="{{$supplier->lname}}" readonly>
                    </div>

                    
                    <div class="col-sm-6 mb-1 ">
                        <small>Email</small>
                        <input type="text" class="form-control" id="" value="{{$supplier->email}}" readonly>
                    </div>
                    
                  
                   
                </div>
                <div class="form-row">
                        <div class="col-md-6 mb-1">
                            <small for="">Company</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->company_name}}" readonly>
                        </div>
                        
                        <div class="col-md-2 mb-1">
                            <small for="">Phone</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->phone_no}}" readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Mobile</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->mobile_no}}" readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Fax</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->fax_no}}" readonly>
                        </div>
                        <div class="col-md-6 mb-1">
                            <small for="">Display name as</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->name}}" readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Other</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->other}}" readonly>
                        </div>
                        <div class="col-md-4 mb-1">
                            <small for="">Website</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->website}}" readonly>
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Address</small>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  rows="2" readonly>{{$supplier->street}}</textarea>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Billing rate(/hr)</small>
                            <input type="number" class="form-control" id="" value="{{$supplier->billing_rate}}" readonly>
                            <small for="">Terms</small>
                        </div>
                      
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$supplier->city_town}}" placeholder="City/Town" readonly>
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$supplier->state_province}}" placeholder="State/Province" readonly>
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" class="form-control" id="" value="{{$supplier->terms}}" readonly>
                        </div>
                        
                        
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$supplier->postal_code}}" placeholder="Postal Code" readonly>
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="" value="{{$supplier->country}}" placeholder="Country" readonly>
                        </div>
                        
                        <div class="col-md-2 mb-1">
                        <small>Opening balance</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->opening_balance}}"  readonly>
                        </div>
                        <div class="col-md-2 mb-1">
                        <small>As of</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->as_of}}"  readonly>
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Notes</small>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Notes" rows="3" readonly>{{$supplier->notes}}</textarea>
                        </div>
                        <div class="col-md-5">
                        <small>Account no.</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->account_no}}"  readonly>
                        </div>
                        
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-3 mb-1">
                        <small>TIN no.</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->tin_no}}"  readonly>
                        </div>
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-4 mb-3">
                        <small>Default expense account</small>
                            <input type="text" class="form-control" id="" value="{{$supplier->default_expense_account}}"  readonly>
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




 
    {!! $suppliers->links() !!}
       
@endsection
