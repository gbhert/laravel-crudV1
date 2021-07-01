<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::latest()->simplePaginate(5);
        $supplier_details = Supplier::all();

        return view('suppliers.index',compact('suppliers','supplier_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'fname'     =>  'required',
        'mname'     =>  'required',
        'lname'     =>  'required',
        'email' =>  'required|email|unique:suppliers',
        'company_name'     =>  'required|unique:suppliers',
        'street'     =>  'required',
        'city_town'     =>  'required',
        'state_province'     =>  'required',
        'postal_code'     =>  'required',
        'country'     =>  'required',
        'notes'     =>  'required',
        'phone_no'     =>  'required|unique:suppliers|max:7',
        'mobile_no'     =>  'required|unique:suppliers|max:11',
        'fax_no'     =>  'required|unique:suppliers|max:8',
        'billing_rate'     =>  'required',
        'terms'     =>  'required',
        'opening_balance'     =>  'required',
        'as_of'     =>  'required',
        'account_no'     =>  'required|unique:suppliers|max:12',
        'tin_no'     =>  'required|unique:suppliers|max:8',
        'default_expense_account'     =>  'required',
        'website'     =>  'required|unique:suppliers',
        'other'     =>  'required'  
        ]);

        $supplier = new Supplier;

        $supplier->fname = $request->fname;
        $supplier->mname = $request->mname;
        $supplier->lname = $request->lname;
        $supplier->email = $request->email;
        $supplier->company_name = $request->company_name;
        $supplier->street = $request->street;
        $supplier->city_town = $request->city_town;
        $supplier->state_province = $request->state_province;
        $supplier->postal_code = $request->postal_code;
        $supplier->country = $request->country;
        $supplier->notes = $request->notes;
        $supplier->phone_no = $request->phone_no;
        $supplier->mobile_no = $request->mobile_no;
        $supplier->fax_no = $request->fax_no;
        $supplier->billing_rate = $request->billing_rate;
        $supplier->terms = $request->terms;
        $supplier->opening_balance = $request->opening_balance;
        $supplier->as_of = $request->as_of;
        $supplier->account_no = $request->account_no;
        $supplier->tin_no = $request->tin_no;
        $supplier->default_expense_account = $request->default_expense_account;
        $supplier->website = $request->website;
        $supplier->other = $request->other;

        $save_supplier = $supplier->save();


        

        if($save_supplier){
            return redirect('/suppliers')->with('success','Supplier Created successfully');
        }else{
            return back()->with('fail','Something went wrong try again.');
        }
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'fname'     =>  'required',
            'mname'     =>  'required',
            'lname'     =>  'required',
            'email'     =>  'required',
            'company_name'     =>  'required',
            'street'     =>  'required',
            'city_town'     =>  'required',
            'state_province'     =>  'required',
            'postal_code'     =>  'required',
            'country'     =>  'required',
            'notes'     =>  'required',
            'phone_no'     =>  'required',
            'mobile_no'     =>  'required',
            'fax_no'     =>  'required',
            'billing_rate'     =>  'required',
            'terms'     =>  'required',
            'opening_balance'     =>  'required',
            'as_of'     =>  'required',
            'account_no'     =>  'required',
            'tin_no'     =>  'required',
            'default_expense_account'     =>  'required',
            'website'     =>  'required',
            'other'     =>  'required' 
        ]);

        $input = $request->all();

        $supplier->update($input);

        return redirect()->route('suppliers.index')->with('success','Supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('suppliers.index')->with('success','Supplier deleted successfully');
    }
   
 
}
