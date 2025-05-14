<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->string('salutation');
            $table->date('date_of_birth');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('customer_type');
            $table->string('company_name');
            $table->string('trade_license');
            $table->string('nationality');
            $table->date('expiry');
            $table->string('company_jurisdiction');
            $table->string('company_ownership');
            $table->string('industry');
            $table->string('uae_residency');
            $table->string('passport_no');
            $table->date('passport_expiry');
            $table->string('emirates_id');
            $table->date('emirates_id_expiry');
            $table->string('national_id');
            $table->date('national_id_expiry');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('mobile');
            $table->string('telephone');
            $table->string('city');
            $table->string('contact_email_id');
            $table->string('country');
            $table->string('po_box');
            $table->string('project_unitnumber');
            $table->string('mode_of_payment');
            $table->string('usage');
            $table->string('purchase_purpose');
            $table->string('employment');
            $table->string('source_of_funds');
            $table->string('head_of_state');
            $table->string('senior_official');
            $table->string('immediate_family');
            $table->string('entrusted');
            $table->longText('customer_signature');
            $table->date('customer_date');
            $table->string('front_id');
            $table->string('back_id');
            $table->string('passport');
            $table->string('gcc_id');
            $table->string('address_proof');
            $table->string('authority');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};


