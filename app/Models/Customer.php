<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_fname',
        'customer_mname',
        'customer_lname',
        'customer_email',
        'customer_company_name',
        'customer_street',
        'customer_city_town',
        'customer_state_province',
        'customer_postal_code',
        'customer_country',
        'customer_notes',
        'customer_phone_no',
        'customer_mobile_no',
        'customer_fax_no',
        'customer_billing_rate',
        'customer_terms',
        'customer_opening_balance',
        'customer_as_of',
        'customer_account_no',
        'customer_tin_no',
        'customer_default_expense_account',
        'customer_website',
        'customer_other'
    ];
}
