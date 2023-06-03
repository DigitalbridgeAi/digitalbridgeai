<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Deposit;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $data['user'] = Auth::user();
        $data['total_deposits'] = Deposit::whereUserId(auth()->id())->whereStatus(1)->sum('amount');
        $data['submittedDeposit'] = Deposit::where('status', '!=', 0)->where('user_id', $data['user']->id)->sum('amount');
        $data['pendingDeposit'] = Deposit::pending()->where('user_id', $data['user']->id)->sum('amount');
        $data['rejectedDeposit'] = Deposit::rejected()->where('user_id', $data['user']->id)->sum('amount');

        return view('user.dashboard', $data);
    }
}
