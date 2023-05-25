<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\GeneralSetting;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=>['logout', 'userLogout']]);
    }


    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email'   => 'required|email',
            'password' => 'required'
        ];

        $messages = [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
            if(Auth::guard('web')->user()->is_banned == 1)
            {
              Auth::guard('web')->logout();
              return response()->json(array('errors' => [ 0 => 'You are Banned From this system!' ]));   
            }

            if(Auth::guard('web')->user()->email_verified == 'No')
            {
              Auth::guard('web')->logout();
              return response()->json(array('errors' => [ 0 => 'Your Email is not Verified!' ]));   
            }

            if(session()->get('setredirectroute') != NULL){
              return response()->json(session()->get('setredirectroute'));
            }
            $gs = GeneralSetting::first();
            $user = auth()->user();
            if($gs->two_factor && $user->twofa){
              return response()->json(route('user.otp'));
            }else{
                $user->update(['verified'=>1]);
                return response()->json(route('user.dashboard'));
            }
  
        }
        return response()->json(array('errors' => [ 0 => 'Credentials Doesn\'t Match !' ]));     


    }


    public function logout()
    {
        Auth::guard('web')->logout();
        session()->forget('setredirectroute');
        session()->forget('affliate');

        return redirect()->route('site.index');
    }
}
