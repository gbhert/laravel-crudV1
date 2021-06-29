<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('company_name')->nullable();
            $table->string('street')->nullable();
            $table->string('city_town')->nullable();
            $table->string('state_province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('notes')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('other')->nullable();
            $table->string('website')->nullable();
            $table->string('billing_rate')->default('200');
            $table->string('terms')->nullable();
            $table->string('opening_balance')->default('200');
            $table->string('as_of')->nullable();
            $table->string('account_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('default_expense_account')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
