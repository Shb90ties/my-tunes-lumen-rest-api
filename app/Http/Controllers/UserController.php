<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoreHelpers\Utils;
use App\CoreHelpers\CoreCache;

class UserController extends Controller
{
    protected $request;

    public function __construct(Request $request) 
    {
        $this->request = $request;
    }

    public function status($userID) {
        echo "user " . $userID . " status is....";
    }

    public function register(Request $request) {
        echo $request->input('email'); // param
    }
}