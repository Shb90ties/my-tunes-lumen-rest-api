<?php

namespace App\Http\Controllers;

// use App\CoreHelpers\Utils;
// use App\CoreHelpers\CoreCache;

class HomeController extends Controller
{
    // protected $request;

    // public function __construct(Request $request) 
    // {
    //     $this->request = $request;
    // }

    public function error($path) {
        echo "cannot find /" . $path;
    }

    // public static function getHomeView() {
    //     return CoreCache::memorize( 'yad2_api_get_home_view_user_', 'high',  function() {
    //         return Utils::curlJSON(config('urls.API.HOME_URL'));
    //     });
    // }
}