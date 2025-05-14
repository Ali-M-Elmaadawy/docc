<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_id',
        'the_date',
        'salutation',
        'date_of_birth',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'nationality',
        'marital_status',
        'customer_type',
        'company_name',
        'trade_license',
        'expiry',
        'company_jurisdiction',
        'company_ownership',
        'industry',
        'uae_residency',
        'passport_no',
        'passport_expiry',
        'emirates_id',
        'emirates_id_expiry',
        'national_id',
        'national_id_expiry',
        'address_one',
        'address_two',
        'mobile',
        'telephone',
        'city',
        'email_id',
        'country',
        'po_box',
        'project_unitnumber',
        'mode_of_payment',
        'usage',
        'purchase_purpose',
        'employment',
        'source_of_funds',
        'head_of_state',
        'senior_official',
        'immediate_family',
        'entrusted',
        'customer_signature',
        'customer_date',
        'front_id',
        'back_id',
        'passport',
        'gcc_id',
        'address_proof',
        'authority'
    ];

    public function front_idPath()
    {
        return $this->front_id ? asset('/uploads').'/'.$this->front_id : asset('images/default.jpg');
    }

    public function back_idPath()
    {
        return $this->back_id ? asset('/uploads').'/'.$this->back_id : asset('images/default.jpg');
    }

    public function passportPath()
    {
        return $this->passport ? asset('/uploads').'/'.$this->passport : asset('images/default.jpg');
    }

    public function gcc_idPath()
    {
        return $this->gcc_id ? asset('/uploads').'/'.$this->gcc_id : asset('images/default.jpg');
    }


    public function address_proofPath()
    {
        return $this->address_proof ? asset('/uploads').'/'.$this->address_proof : asset('images/default.jpg');
    }

    public function authorityPath()
    {
        return $this->authority ? asset('/uploads').'/'.$this->authority : asset('images/default.jpg');
    }








}
