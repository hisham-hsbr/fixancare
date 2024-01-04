<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Fixancare\MobileService;

class FrontendDashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');

    // }
    public function track()
    {

        $track_test = $_GET['query'];

         $job_numbers = MobileService::where('job_number','LIKE',$track_test)->get();
        //  $job_numbers = job_number::where('job_number','LIKE','%'.$track_test.'%')->get();
         if ($track_test == "") {

          return view('welcome')->with('message_store', 'Brand Created Successfully');
            }
            else {
          return view('front_end.track',compact('job_numbers'));

    }
    }
}
