<?php

namespace App\Http\Controllers;

use App\Models\Cardbox;
use App\Models\Counter;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{

    public function Dashboard(){
        $cuser = User::find(Auth::user()->id);
        $alluser = User::all();
        $totalusers = $alluser->count() ?? 0;
        $totalcounters = Counter::all()->count() ?? 0;
        $totalslides = Slider::all()->count() ?? 0;
        $totalboxcards = Cardbox::all()->count() ?? 0;
        return view('admdash.dashboard', compact('cuser','alluser', 'totalusers', 'totalslides','totalcounters','totalboxcards'));
    }

    public function loginview(){
        return view('admdash.auth.login');
    }

    public function logindata(Request $request){
        $validated = $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:6"
        ]);
        $check = Auth::attempt($validated);
        if($check && $check !== ""){
            return redirect()->route('Dashboard');
        }else{
            return redirect()->route('login')->with('error', 'credentials are invalid!');
        }
    }

    public function registerview(){
        return view('admdash.auth.register');
    }

    public function registerdata(Request $request){

        $validated = $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:6",
        ]);

        $newuser = User::create([
            "name"=>$validated['name'],
            "email"=>$validated['email'],
            "password"=>$validated['password'],
        ]);
        if(!empty($newuser) && $newuser !==" "){
            Auth::login($newuser);
            return redirect()->route('Dashboard')->with("success","User created successfully!");
        }else{
            return redirect()->route('register')->with("error", "something whent to wrong! please try again.");
        }
    }
    public function edit($id){
        $user = User::find($id);
        return view('admdash.auth.edit', compact('user'));
    }
    public function update(Request $request,$id){
        $userdata = User::find($id);
        $validated = $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required|min:6"
        ]);
        
            $updated = $userdata->update([
                "name"=>$validated['name'],
                "email"=>$validated['email'],
                "password"=> $validated['password'],
            ]);
       
        if($updated!==" "){
            return redirect()->route('Dashboard')->with("success","Profile updating successfull.");
        }else{
            return redirect()->route('register')->with("error", "something whent to wrong! please try again.");
        }
    }
    public function delete($id){
        $user = User::find($id)->delete();
        if($user){
            return redirect()->route('Dashboard')->with("success","user delete successfull.");
        }else{
            return redirect()->route('Dashboard')->with("error", "something whent to wrong! please try again.");
        }
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
