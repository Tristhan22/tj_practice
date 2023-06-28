<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser(Request $r) {
        $user_credentials = $r->only('username', 'password');

        if (Auth::attempt($user_credentials)) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        }
    }

    public function logoutUser() {
        Auth::logout();

        return redirect('/login');
    }

    public function register(Request $request){

        $validate = $request->validate([
            'name'=>'required|max:30',
            'username'=>'required|unique:users|min:5|max:20',
            'password'=>'required|min:5|max:20'
        ]);

        // Encrypt password
        $validate['password'] = Hash::make($validate['password']);

        $user = User::create($validate);
        //pag false babalik sa login
        if($user){
            return redirect('/login');
        }
    }
}
