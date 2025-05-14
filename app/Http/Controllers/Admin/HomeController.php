<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Models\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Jobs\ExcuteNotificationJob;
use App\Mail\WelcomeEmail;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        return view('admin.dashboard');
    }


    public function emails()
    {        
        $emails = Email::orderBy('id' , 'DESC')->paginate(32);
        return view('admin.emails.index' , compact('emails'));
    }


    public function edit(Email $email)
    {
        return view('admin.emails.edit', compact('email'));
    }

    public function show(Email $email)
    {
        return view('admin.emails.show', compact('email'));
    }

    public function admin_review_post(Request $request , Email $email) {
        $validator = \Validator::make($request->all() , [  

            'status'  => 'required'
        ])->validate();


        if($email->review) {
            $email->review()->update([
                'admin_id' => auth('admin')->user()->id,
                'status' => $request->status,
            ]);

        } else {
            $email->review()->create([

                'email_id' => $email->id,
                'info_id' => $email->info->id,
                'admin_id' => auth('admin')->user()->id,
                'status' => $request->status,
            ]);            
        }

        return redirect()->route('admin.emails.index');

    }

    public function update(Request $request , Email $email) {


        $validator = \Validator::make($request->all() , [  

            'the_date'  => 'required|date',
            'salutation'  => 'required|max:255',
            'date_of_birth'  => 'required|date',
            'first_name'  => 'required|max:255',
            'middle_name'  => 'required|max:255',
            'last_name'  => 'required|max:255',
            'gender'  => 'required|max:255',
            'marital_status'  => 'required|max:255',
            'customer_type' => 'required|max:255',
            'company_name' => 'required|max:255',
            'trade_license' => 'required|max:255',
            'expiry' => 'required|date',
            'company_jurisdiction' => 'required|max:255',
            'company_ownership' => 'required|max:255',
            'industry' => 'required|max:255',
            'uae_residency' => 'required|max:255',
            'passport_no' => 'required|max:255',
            'passport_expiry' => 'required|date',
            'emirates_id' => 'required|max:255',
            'emirates_id_expiry' => 'required|date',
            'national_id' => 'required|max:255',
            'national_id_expiry' => 'required|date',
            'address_one' => 'required|max:255',
            'address_two' => 'required|max:255',
            'mobile' => 'required|max:255',
            'telephone' => 'required|max:255',
            'city' => 'required|max:255',
            'contact_email_id' => 'required|max:255',
            'country' => 'required|max:255',
            'po_box' => 'required|max:255',
            'project_unitnumber' => 'required|max:255',
            'mode_of_payment' => 'required|max:255',
            'usage' => 'required|max:255',
            'purchase_purpose' => 'required|max:255',
            'employment' => 'required|max:255',
            'source_of_funds' => 'required|max:255',
            'head_of_state' => 'required|max:255',
            'senior_official' => 'required|max:255',
            'immediate_family'  => 'required|max:255',
            'entrusted'  => 'required|max:255',
            'customer_date'  => 'required|date',
            'immediate_family'  => 'required|max:255',
            'front_id'  => 'nullable|image',
            'back_id'  => 'nullable|image',
            'passport'  => 'nullable|image',
            'gcc_id'  => 'nullable|image',
            'address_proof'  => 'nullable|image',
            'authority'  => 'nullable|image'

        ])->validate();



        $inputs = $request->except('_token' , '_method');

        if($request->front_id)
            $inputs['front_id'] = $this->uploadFile($request->file('front_id'), 'emails' , 10);
        if($request->back_id)
            $inputs['back_id'] = $this->uploadFile($request->file('back_id'), 'emails' , 20);
        if($request->passport)
            $inputs['passport'] = $this->uploadFile($request->file('passport'), 'emails' , 30);
        if($request->gcc_id)
            $inputs['gcc_id'] = $this->uploadFile($request->file('gcc_id'), 'emails' , 40);
        if($request->address_proof)
            $inputs['address_proof'] = $this->uploadFile($request->file('address_proof'), 'emails' , 50);
        if($request->authority)
            $inputs['authority'] = $this->uploadFile($request->file('authority'), 'emails' , 60);


        $email->info()->update($inputs);

        return redirect()->route('admin.emails.show' , $email->id);

    }


    public function emails_send() {




        $plucks = TestEmail::pluck('email');
    
        $plucks_array =  $plucks->chunk(10);
        $on = \Carbon\Carbon::now();     
      
        foreach($plucks_array as $key => $one) {

  dd(Mail::to($one[0])->send(new WelcomeEmail([
                  'name' => 'Demo',
             ]))); 

            $after = $on->addMinutes(1);
            ExcuteNotificationJob::dispatch($one)->delay($after);
        }
    }


}
