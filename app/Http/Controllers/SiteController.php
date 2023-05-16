<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function business()
    {
        return view('frontend.business.index');
    }

    public function businessDigitalEquity()
    {
        return view('frontend.business.digital-equity');
    }


    public function businessDigitalCredit()
    {
        return view('frontend.business.digital-credit');
    }

    public function businessLiquidStrategies()
    {
        return view('frontend.business.liquid-strategies');
    }

    public function responsibility()
    {
        return view('frontend.responsibility');
    }
   
    public function news()
    {
        return view('frontend.news');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function termsOfUse()
    {
        return view('frontend.terms-of-use');
    }
    


}
