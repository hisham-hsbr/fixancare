<?php

namespace App\Http\Controllers\fixancare;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Fixancare\WorkStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WorkStatusController extends Controller
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
        $workStatuss = WorkStatus::all();
        return view('folder.WorkStatuss.folder',compact('WorkStatuss'))->with('i');
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
    public function show(WorkStatus $workStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkStatus $workStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkStatus $workStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkStatus $workStatus)
    {
        //
    }
}
