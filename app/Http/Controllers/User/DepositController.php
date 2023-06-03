<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\PaymentGateway;
use Illuminate\Http\Request;
use App\Models\GatewayCurrency;

class DepositController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        
        $data['deposits'] =  auth()->user()->deposits()->searchable(['trx'])->with(['gateway'])->orderBy('id', 'desc')->paginate(20);
        return view('user.deposit.index',$data);
    }

    public function create(){
        $data['gatewayCurrency'] = GatewayCurrency::whereHas('method', function ($gate) {
            $gate->where('status', 1);
        })->with('method')->orderby('method_code')->get();


        return view('user.deposit.create',$data);
    }
}
