<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Environment;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $sponsors = Support::where('category',"Sponsor")->get();
        $mediaPartners = Support::where('category',"Media Partner")->get();
        $media_partner_count = Support::where('category',"Media Partner")->count();
        $sponsor_count = Support::where('category',"Sponsor")->count();

        $date_now = Carbon::now()->toDateTimeString();
        $environment_coming_soon = false;
        $environment_coming_soon_data = Environment::where('name', 'Coming Soon')->first();

        if(!$environment_coming_soon_data == null){
            if($environment_coming_soon_data->start_time < $date_now && $environment_coming_soon_data->end_time > $date_now){
                $environment_coming_soon = true;
            }
        }

        return view('home',[
            'environment_coming_soon' => $environment_coming_soon,
            'sponsor_count' => $sponsor_count,
            'media_partner_count' => $media_partner_count,
            'sponsors' => $sponsors,
            'mediaPartners' => $mediaPartners
        ]);
    }

    public function loading()
    {
        return view('loader');
    }
}
