<?php

namespace App\Http\Controllers\fixancare;

use App\Http\Controllers\Controller;
use App\Models\Fixancare\MobileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

class MobileServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $mobile_services = MobileService::all();
        return view('back_end.fixancare.mobile_services.index',compact('mobile_services'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobile_services = MobileService::all();
        return view('back_end.fixancare.mobile_services.create',compact('mobile_services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MobileService $mobileService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MobileService $mobileService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MobileService $mobileService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MobileService $mobileService)
    {
        //
    }
}
