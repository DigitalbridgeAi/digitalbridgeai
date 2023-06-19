<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Pagesetting extends Model
{
    protected $fillable = [
        'contact_success',
        'contact_email',
        'contact_title',
        'contact_text',
        'street',
        'phone',
        'fax',
        'email',
        'site',
        'phone_code',
        'login_banner',
        'login_title',
        'login_subtitle',
        'side_title',
        'side_text',
        'review_blog',
        'pricing_plan',
        'video_subtitle',
        'video_title',
        'video_text',
        'video_link',
        'video_image',
        'video_background',
        'start_title',
        'start_text',
        'start_photo',
        'feature_title',
        'feature_text',
        'brand_title',
        'brand_text',
        'brand_photo',
        'pagesettings',
        'plan_title',
        'plan_subtitle',
        'portfolio_subtitle',
        'portfolio_title',
        'portfolio_text',
        'p_subtitle',
        'p_title',
        'p_text',
        'team_subtitle',
        'team_title',
        'team_text',
        'blog_subtitle',
        'blog_title',
        'blog_text',
        'faq_title',
        'faq_subtitle',
        'banner_title',
        'banner_text',
        'banner_link1',
        'banner_link2',
        'about_photo',
        'about_title',
        'about_text',
        'about_details',
        'about_link',
        'footer_top_photo',
        'footer_top_title',
        'footer_top_text',
        'hero_title',
        'hero_subtitle',
        'hero_btn_url',
        'hero_link',
        'hero_photo',
        'referral_banner',
        'referral_title',
        'referral_text',
        'referral_percentage',
        'profit_banner',
        'profit_title',
        'profit_text',
        'call_title',
        'call_subtitle',
        'call_link',
        'call_bg',
        'latitude',
        'longitude',
    ];

    

    
    public $timestamps = false;

    

    public function upload($name,$file,$oldname)
    {
                $file->move('assets/images',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$oldname)) {
                        unlink(public_path().'/assets/images/'.$oldname);
                    }
                }  
    }

//     public function index() 
//     {
//         $ps = Pagesetting::find(); 
// if ($ps) {
//     return view('your.view.name', ['ps' => $ps]);
// } else {
//     return redirect()->back()->with('error', 'Data not found');
// }

//     }

    
    public function index(Request $request)
    {
        $ps = new Pagesetting();
        $ps->hero_title = 'Welcome to my website';
        $ps-> hero_subtitle = 'My subtitle';
        $ps->hero_photo = 'assets/images/hero.jpg';

        return view('frontend.index', compact('ps'));
        return view('frontend.index');



        // if ($request->hasFile('hero_photo')) {
        //     $file = $request->file('hero_photo');
        //     $path = $file->store('hero_photos'); // Store the file in the 'hero_photos' directory
        //     $ps->hero_photo = $path; // Set the file path or file name here
        // }
    
        // Set other fields as needed
        $ps->save();

        return view('frontend.index', compact('ps'));
        return view('frontend.index');
    }

    

}
