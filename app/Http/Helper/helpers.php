<?php

use App\Models\GeneralSetting;



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