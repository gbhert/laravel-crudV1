<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'fname',
        'mname',
        'lname',
        'email',
        'company_name',
        'street',
        'city_town',
        'state_province',
        'postal_code',
        'country',
        'notes',
        'phone_no',
        'mobile_no',
        'fax_no',
        'billing_rate',
        'terms',
        'opening_balance',
        'as_of',
        'account_no',
        'tin_no',
        'default_expense_account',
        'website',
        'other'
    ];
}
