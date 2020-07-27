<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use Carbon\Carbon;
use DateTime;
use DatePeriod;
use DateInterval;
use DB;
class WebsiteHomePageController extends Controller
{
    

    public function __construct(){
       
    }

    /**
     * 
     * GoReact Events Homepage Controller
     */
    public function index(Request $request) 
    {
        
        
        return view('dashboard/dashboard');
    }
    
   
  
}
