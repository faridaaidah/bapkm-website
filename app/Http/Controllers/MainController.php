<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function checklogin(Request $request)
    {
         $this->validate($request, [
              'username'   => 'required|username',
              'email'   => 'required|email',
              'password'  => 'required|alphaNum|min:3'
          ]);

         $user_data = array(
              'username'  => $request->get('username'),
              'password' => $request->get('password')
         );

         if(Auth::attempt($user_data))
         {
            return redirect('main/successlogin');
         }
         else
         {
            return back()->with('error', 'Wrong Login Details');
         }

    }

    function successlogin()
    {
        return view('successlogin');
    }

    function logout()
    {
         Auth::logout();
         return redirect()->route('login');
    }
}
?>