<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingsFields= $request->validate([
            'name'=>['required',Rule::unique('users','name')],
            'email'=>['required',Rule::unique('users','email')],
            'password'=>'required'
        ]);
        $incomingsFields['password']=bcrypt($incomingsFields['password']);
        $user= User::create($incomingsFields);
        auth()->login($user);
        return redirect('/');
    } 
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
    public function login(Request $request){
        $incomingsFields=$request->validate([
        'loginname'=>'required',
        'loginpassword'=>'required'
        ]);
        if(auth()->attempt(['name'=>$incomingsFields['loginname'],'password'=>$incomingsFields['loginpassword']])){
            $request->session()->regenerate();
        }
        return redirect('/');
}
}
