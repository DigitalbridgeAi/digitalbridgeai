<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use App\Models\GeneralSetting;

class LoginController extends Controller
{

  use AuthenticatesUsers;

  protected $username;





    public function __construct()
    {
        $this->middleware('guest', ['except'=>['logout', 'userLogout']]);
        $this->username = $this->findUsername();

      }

    public function findUsername()
    {
        $login = request()->input('username');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }

    public function showLoginForm()
    {
        return view('user.login');
    }

    // public function login(Request $request)
    // {
    //     $rules = [
    //         'email'   => 'required|email',
    //         'password' => 'required'
    //     ];

    //     $messages = [
    //         'email.required' => 'Email is required',
    //         'password.required' => 'Password is required'
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if($validator->fails()) {
    //       return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    //     }

    //     if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
    //         if(Auth::guard('web')->user()->is_banned == 1)
    //         {
    //           Auth::guard('web')->logout();
    //           return response()->json(array('errors' => [ 0 => 'You are Banned From this system!' ]));   
    //         }

    //         if(Auth::guard('web')->user()->email_verified == 'No')
    //         {
    //           Auth::guard('web')->logout();
    //           return response()->json(array('errors' => [ 0 => 'Your Email is not Verified!' ]));   
    //         }

    //         if(session()->get('setredirectroute') != NULL){
    //           return response()->json(session()->get('setredirectroute'));
    //         }
    //         $gs = GeneralSetting::first();
    //         $user = auth()->user();
    //         if($gs->two_factor && $user->twofa){
    //           return response()->json(route('user.otp'));
    //         }else{
    //             $user->update(['verified'=>1]);
    //             return response()->json(route('user.dashboard'));
    //         }
  
    //     }
    //     return response()->json(array('errors' => [ 0 => 'Credentials Doesn\'t Match !' ]));     


    // }


    // public function logout()
    // {
    //     Auth::guard('web')->logout();
    //     session()->forget('setredirectroute');
    //     session()->forget('affliate');

    //     return redirect()->route('site.index');
    // }

    public function login(Request $request)
    {

        $this->validateLogin($request);

        $request->session()->regenerateToken();

        // if(!verifyCaptcha()){
        //     $notify[] = ['error','Invalid captcha provided'];
        //     return back()->withNotify($notify);
        // }

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);


      return response()->json(array('errors' => [ 0 => 'Credentials Doesn\'t Match !' ]));     

        // return $this->sendFailedLoginResponse($request);
    }
    protected function validateLogin(Request $request)
    {

        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

    }



    public function logout()
    {
        $this->guard()->logout();

        request()->session()->invalidate();

        $notify[] = ['success', 'You have been logged out.'];
        return to_route('user.login')->withNotify($notify);
    }

    public function authenticated(Request $request, $user)
    {
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
        // return to_route('user.home');
    }
}
