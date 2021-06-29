<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_fname')->nullable();
            $table->string('customer_mname')->nullable();
            $table->string('customer_lname')->nullable();
            $table->string('customer_email')->unique()->nullable();
            $table->string('customer_company_name')->nullable();
            $table->string('customer_street')->nullable();
            $table->string('customer_city_town')->nullable();
            $table->string('customer_state_province')->nullable();
            $table->string('customer_postal_code')->nullable();
            $table->string('customer_country')->nullable();
            $table->string('customer_notes')->nullable();
            $table->string('customer_phone_no')->nullable();
            $table->string('customer_mobile_no')->nullable();
            $table->string('customer_fax_no')->nullable();
            $table->string('customer_other')->nullable();
            $table->string('customer_website')->nullable();
            $table->string('customer_billing_rate')->default('200');
            $table->string('customer_terms')->nullable();
            $table->string('customer_opening_balance')->default('200');
            $table->string('customer_as_of')->nullable();
            $table->string('customer_account_no')->nullable();
            $table->string('customer_tin_no')->nullable();
            $table->string('customer_default_expense_account')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
