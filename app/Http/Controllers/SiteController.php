<?php

namespace App\Http\Controllers;

use App\Models\Pagesetting;
use Illuminate\Http\Request;
use Session;

class SiteController extends Controller
{
    
    public function index(Request $request)
    {
        $ps = new Pagesetting();
        $ps->hero_title = 'Welcome to my website';
        $ps-> hero_subtitle = 'My subtitle';
        $ps->hero_photo = 'assets/images/hero.jpg';

        return view('frontend.index', compact('ps'));
       // return view('frontend.index');

        
        $ps->save();
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

    public function shareholders()
    {
        return view('frontend.shareholders.index');
    }

    public function stockInfoQuote()
    {
        return view('frontend.shareholders.stock-quote');
    }

    public function stockInfoDividends()
    {
        return view('frontend.shareholders.dividends');
    }

    public function stockDgrbTax()
    {
        return view('frontend.shareholders.dgrb-tax');
    }

    public function stockClnrTax()
    {
        return view('frontend.shareholders.clnr-historic-tax');
    }

    public function stockNrfTax()
    {
        return view('frontend.shareholders.NRF-historic-tax');
    }

    public function stockDistributionProgram()
    {
        return view('frontend.shareholders.distribution-reinvestment-program');
    }

    public function financialsQuaterlyQuote()
    {
        return view('frontend.shareholders.quaterly-reports');
    }

    public function financialsAnnualQuote()
    {
        return view('frontend.shareholders.annual-reports');
    }

    public function financialsSupplements()
    {
        return view('frontend.shareholders.supplements');
    }

    public function secFilings()
    {
        return view('frontend.shareholders.sec-fillings');
    }



    public function newsReport()
    {
        return view('frontend.shareholders.news-report');
    }

    public function events()
    {
        return view('frontend.shareholders.events');
    }

    public function contactUs()
    {
        return view('frontend.shareholders.contact-us');
    }

    public function coperateGovernaceHighlights()
    {
        return view('frontend.shareholders.highlights');
    }

    
    public function currency($id)
    {
        Session::put('currency', $id);
        cache()->forget('session_currency');
        return redirect()->back();
    }

    public function showPage($id) 
    {
        $ps = Pagesetting::first($id);
        return view('frontend.index', compact('ps'));
    }

    


}
