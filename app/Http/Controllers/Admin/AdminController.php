<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class AdminController extends Controller
{



    public function index()
    {

        $admins = Admin::orderBy('id' , 'DESC');

        $admins = $admins->get();
        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = \Validator::make($request->all() , [

            'username'  => 'required|unique:admins,username',
            'password'  => 'required'

        ])->validate();

        Admin::create($request->all());
        session()->flash('success' , 'Admin Added Success');
        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  AdminRequest  $request
     * @param  \App\Model\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $validator = \Validator::make($request->all() , [

            'username'  => 'required|unique:admins,username, ' . $admin->id,
            'password'  => 'nullable'

        ])->validate();

        if($request->password != null) {
            $inputs = $request->all();
            $inputs['password'] = bcrypt($request->password);
            $admin->update($inputs);
        } else {
            $admin->update($request->except('password'));
        }
        
        session()->flash('success' , 'Admin Updated Success');
        return redirect()->route('admin.admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {

        if($admin->id == 1){
            abort('403');
        }else{
            $admin->delete();
        }
        session()->flash('success' , 'Admin Deleted Success');
        return back();
    }

}
