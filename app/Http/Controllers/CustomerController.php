<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->simplePaginate(5);
        $customers_details = Customer::all();

        return view('customers.index',compact('customers','customers_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'customer_fname'     =>  'required',
            'customer_mname'     =>  'required',
            'customer_lname'     =>  'required',
            'customer_email' =>  'required|email|unique:customers',
            'customer_company_name'     =>  'required|unique:customers',
            'customer_street'     =>  'required',
            'customer_city_town'     =>  'required',
            'customer_state_province'     =>  'required',
            'customer_postal_code'     =>  'required',
            'customer_country'     =>  'required',
            'customer_notes'     =>  'required',
            'customer_phone_no'     =>  'required|unique:customers|max:7',
            'customer_mobile_no'     =>  'required|unique:customers|max:11',
            'customer_fax_no'     =>  'required|unique:customers|max:8',
            'customer_billing_rate'     =>  'required',
            'customer_terms'     =>  'required',
            'customer_opening_balance'     =>  'required',
            'customer_as_of'     =>  'required',
            'customer_account_no'     =>  'required|unique:customers|max:12',
            'customer_tin_no'     =>  'required|unique:customers|max:8',
            'customer_default_expense_account'     =>  'required',
            'customer_website'     =>  'required|unique:customers',
            'customer_other'     =>  'required'  
            ]);
    
            $customer = new Customer;
    
            $customer->customer_fname = $request->customer_fname;
            $customer->customer_mname = $request->customer_mname;
            $customer->customer_lname = $request->customer_lname;
            $customer->customer_email = $request->customer_email;
            $customer->customer_company_name = $request->customer_company_name;
            $customer->customer_street = $request->customer_street;
            $customer->customer_city_town = $request->customer_city_town;
            $customer->customer_state_province = $request->customer_state_province;
            $customer->customer_postal_code = $request->customer_postal_code;
            $customer->customer_country = $request->customer_country;
            $customer->customer_notes = $request->customer_notes;
            $customer->customer_phone_no = $request->customer_phone_no;
            $customer->customer_mobile_no = $request->customer_mobile_no;
            $customer->customer_fax_no = $request->customer_fax_no;
            $customer->customer_billing_rate = $request->customer_billing_rate;
            $customer->customer_terms = $request->customer_terms;
            $customer->customer_opening_balance = $request->customer_opening_balance;
            $customer->customer_as_of = $request->customer_as_of;
            $customer->customer_account_no = $request->customer_account_no;
            $customer->customer_tin_no = $request->customer_tin_no;
            $customer->customer_default_expense_account = $request->customer_default_expense_account;
            $customer->customer_website = $request->customer_website;
            $customer->customer_other = $request->customer_other;
    
            $save_customer = $customer->save();
            
            if($save_customer){
                return redirect('/customers')->with('success','Customer Created successfully');
            }else{
                return back()->with('fail','Something went wrong try again.');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'customer_fname'     =>  'required',
            'customer_mname'     =>  'required',
            'customer_lname'     =>  'required',
            'customer_email'     =>  'required',
            'customer_company_name'     =>  'required',
            'customer_street'     =>  'required',
            'customer_city_town'     =>  'required',
            'customer_state_province'     =>  'required',
            'customer_postal_code'     =>  'required',
            'customer_country'     =>  'required',
            'customer_notes'     =>  'required',
            'customer_phone_no'     =>  'required',
            'customer_mobile_no'     =>  'required',
            'customer_fax_no'     =>  'required',
            'customer_billing_rate'     =>  'required',
            'customer_terms'     =>  'required',
            'customer_opening_balance'     =>  'required',
            'customer_as_of'     =>  'required',
            'customer_account_no'     =>  'required',
            'customer_tin_no'     =>  'required',
            'customer_default_expense_account'     =>  'required',
            'customer_website'     =>  'required',
            'customer_other'     =>  'required' 
        ]);

        $input = $request->all();

        $customer->update($input);

        return redirect()->route('customers.index')->with('success','Customer updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success','Customer deleted successfully');
    }
}
