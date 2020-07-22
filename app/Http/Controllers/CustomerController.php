<?php

namespace App\Http\Controllers;

use App\Models\AddBanner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
  
    public function getBanners(Request $request)
    {
        $today = Carbon::now();
        $ads = AddBanner::whereDate('date_from','<=', $today)->whereDate('date_to','>=', $today)->get();
        $banners = [];
        $banners_ids = [];
        foreach ($ads as $ad){
            if ($ad->last_view_at == null){
                $banners [] = $ad;
                $banners_ids [] = $ad->id;
            }
            if ($ad->last_view_at != null){
                $time = Carbon::parse($ad->last_view_at);
                $duration = $time->addMinutes($ad->duration)->format('H:i:s');
                $frequency = $time->addMinutes($ad->frequency)->format('H:i:s');
                $today_time = $today->format('H:i:s');
                if ($duration >= $today_time) {
                    $banners [] = $ad;
                }elseif ($frequency <= $today_time){
                    $banners [] = $ad;
                    $banners_ids [] = $ad->id;
                }
            }
        }
     AddBanner::whereIn('id', $banners_ids)->update(['last_view_at' => $today->format('H:i:s')]);
       
        return view('admin.pages.customer',compact('banners'));
    }
}
