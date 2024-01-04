<?php

namespace App\Http\Controllers\fixancare;

use App\Http\Controllers\Controller;
use App\Models\Fixancare\MobileComplaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

class MobileComplaintController extends Controller
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
        $mobileComplaints = MobileComplaint::all();
        return view('folder.MobileComplaints.folder',compact('MobileComplaints'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(MobileComplaint $mobileComplaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MobileComplaint $mobileComplaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MobileComplaint $mobileComplaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MobileComplaint $mobileComplaint)
    {
        //
    }
}
