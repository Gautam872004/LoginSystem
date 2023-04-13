<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Session;

class Logincontroller extends Controller
{

    function checklogin(Request $request)
    {
       $email = $request->email;
       $password = $request->password;

       $obj = Login::where("email",$email)->where("password",$password)->get();

       if(count($obj)==1)
       {
            Session::put("islogin","yes");
            return redirect()->route("home");
       }
       else
       {
            return redirect()->route('logisystem.create')->with("message","email and password not found");
       }
    }
    function home()
    {
        return view('system.homepage');
    }

    function logout()
    {
        Session::flush();
        return redirect()->route('logisystem.create')->with("message","Logout Sucecssfully");
    }

    function regestration(Request $request)
    {
        return view('system.Regestration');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('system.LoginForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Login::create($request->all());
        return redirect()->route('logisystem.create')->with("message","Data are sucessfully Register....");
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
