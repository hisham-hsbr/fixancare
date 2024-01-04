<?php

namespace App\Http\Controllers\fixancare;

use App\Http\Controllers\Controller;
use App\Models\Fixancare\MobileModel;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MobileModelController extends Controller
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
        $mobileModels = MobileModel::all();
        return view('folder.MobileModels.folder',compact('MobileModels'))->with('i');
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
    public function show(MobileModel $mobileModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MobileModel $mobileModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MobileModel $mobileModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MobileModel $mobileModel)
    {
        //
    }
}
