<?php

use App\Models\GeneralSetting;
use App\Models\Language;
use App\Models\PaymentGateway;
use App\Models\GatewayCurrency;
use Carbon\Carbon;



function globalCurrency()
{
    $currency = Session::get('currency') ?  DB::table('currencies')->where('id','=',Session::get('currency'))->first() : DB::table('currencies')->where('is_default','=',1)->first();
    return $currency;
}


function showprice($price)
{
    $gs = GeneralSetting::first();
    $curr = globalCurrency();

    $price = round(($price * $curr->value), 2);
    if($gs->currency_format == 0) {
        return $curr->sign. $price;
    } else {
        return $price . $curr->sign;
    }

}
function getTrx($length = 12)
{
    $characters = 'ABCDEFGHJKMNOPQRSTUVWXYZ123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function gatewayRedirectUrl($type = false)
{
    if ($type) {
        return 'user.deposit.history';
    } else {
        return 'user.deposit.index';
    }
}

function showAmount($amount, $decimal = 2, $separate = true, $exceptZeros = false)
{
    $separator = '';
    if ($separate) {
        $separator = ',';
    }
    $printAmount = number_format($amount, $decimal, '.', $separator);
    if ($exceptZeros) {
        $exp = explode('.', $printAmount);
        if ($exp[1] * 1 == 0) {
            $printAmount = $exp[0];
        } else {
            $printAmount = rtrim($printAmount, '0');
        }
    }
    return $printAmount;
}

function diffForHumans($date)
{
    $lang = session()->get('lang');
    Carbon::setlocale($lang);
    return Carbon::parse($date)->diffForHumans();
}


function showDateTime($date, $format = 'Y-m-d h:i A')
{
    $lang = session()->get('lang');
    Carbon::setlocale($lang);
    return Carbon::parse($date)->translatedFormat($format);
}
