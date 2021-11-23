<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\DropdownModel;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Registration::all();
        $title=" Trainee Registration ";
        $url=url('/registration');
        $data=compact('url','title','register');
        return view('RegistrationForm')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(

            [
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required|email',
                'dob'=>'required',
                'trade'=>'required',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'zip'=>'required',
                
            ]


        );

        $registration = new Registration;
        $registration->fname=$request['fname'];
        $registration->lname=$request['lname'];
        $registration->email=$request['email'];
        $registration->dob=$request['dob'];
        $registration->trade=$request['trade'];
        $registration->address=$request['address'];
        $registration->city=$request['city'];
        $registration->state=$request['state'];
        $registration->zip=$request['zip'];
        $registration->save();

        return redirect(url('registration/view'));
        // return redirect('/registration/view');
    }

    public function view()
    {
        $register = Registration::all();
        $data = compact('register');
        return view('view')->with($data);
       
      
    }

//     public function getState()
// {
//     $states=DB::table('state')->get();
//     return View('RegistrationForm')->with($states);
// }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="Update Trainee Details";
        $url=url('/registration/update')."/".$id;
        $register = Registration::find($id);  
        $data = compact('register','url','title');
        return view('RegistrationForm')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register = Registration::find($id);
        $register->delete();
        return redirect()->back(); 
    }
}
