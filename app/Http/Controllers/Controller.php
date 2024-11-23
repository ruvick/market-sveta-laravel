<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Route;

use App\Models\Baner;

use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

        $rout_name = \Request::route()->getName();
    
        $banners = Baner::where("page", $rout_name)->orWhere("page", 'all')->get();

        $banner_areas = [];

        foreach($banners as $el){
            $banner_areas[$el->page_area][] = $el;
        }


        View::share('banners', $banner_areas);
    }
}
