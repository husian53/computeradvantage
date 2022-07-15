<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_group_id');
            $table->string('company_name',50);
            $table->string('company_short_name',7)->nullable();
            $table->string('company_invoice_heading',20)->nullable();
            $table->string('company_address',500)->nullable();
            $table->string('company_telephone',200)->nullable();
            $table->string('company_website',100)->nullable();
            $table->string('company_email',100)->nullable();
            $table->string('vat_tin_number',20)->nullable();
            $table->string('terms_conditions',1000)->nullable();
            $table->string('declaration',500)->nullable();
            $table->string('bank_details',500)->nullable();
            $table->bigInteger('active')->default(0);
            $table->string('other1',500)->nullable();
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
        Schema::dropIfExists('company');
    }
};
