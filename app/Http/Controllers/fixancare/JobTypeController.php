<?php

namespace App\Http\Controllers\fixancare;

use App\Http\Controllers\Controller;
use App\Models\Fixancare\JobType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

class JobTypeController extends Controller
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
        $jobTypes = JobType::all();
        return view('back_end.fixancare.job_types.index',compact('jobTypes'))->with('i');
    }

    public function JobTypesGet()
    {

        $job_types = JobType::all();
        return Datatables::of($job_types)

        ->setRowId(function ($job_type) {
            return $job_type->id;
            })

            ->editColumn('status', function (JobType $job_type) {

                $active='<span style="background-color: #04AA6D;color: white;padding: 3px;width:100px;">Active</span>';
                $inActive='<span style="background-color: #ff9800;color: white;padding: 3px;width:100px;">In Active</span>';

                $activeId = ($job_type->status);

                    if($activeId==1){
                        $activeId = $active;
                    }
                    else {
                        $activeId = $inActive;
                    }
                    return $activeId;
            })


        ->editColumn('created_by', function (JobType $job_type) {

            return ucwords($job_type->CreatedBy->name);
        })


        ->editColumn('updated_by', function (JobType $job_type) {

            return ucwords($job_type->UpdatedBy->name);
        })
        ->addColumn('created_at', function (JobType $job_type) {
            return $job_type->created_at->format('d-M-Y h:m');
        })
        ->addColumn('updated_at', function (JobType $job_type) {

            return $job_type->updated_at->format('d-M-Y h:m');
        })

        ->addColumn('editLink', function (JobType $job_type) {

            $editLink ='<a href="'. route('job-types.edit', $job_type->id) .'" class="ml-2"><i class="fa-solid fa-edit"></i></a>';
               return $editLink;
        })
        ->addColumn('deleteLink', function (JobType $job_type) {
           $CSRFToken = "csrf_field()";
            $deleteLink ='
                        <button class="btn btn-link delete-JobType" data-JobType_id="'.$job_type->id.'" type="submit"><i
                                class="fa-solid fa-trash-can text-danger"></i>
                        </button>';
               return $deleteLink;
        })


       ->rawColumns(['status','editLink','deleteLink'])
        ->toJson();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back_end.fixancare.job_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'code' => 'required|unique:job_types,code',
            'name' => 'required',
        ]);
        $job_type = new JobType();


        $job_type->code  = $request->code;
        $job_type->name = $request->name;


        if ($request->status==0)
            {
                $job_type->status==0;
            }

        $job_type->status = $request->status;

        $job_type->created_by = Auth::user()->id;
        $job_type->updated_by = Auth::user()->id;

        $job_type->save();

        return redirect()->route('job-types.index')
                        ->with('message_store', 'Job type Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobType $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job_type = JobType::find($id);
        return view('back_end.fixancare.job_types.edit',compact('job_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => "required|unique:job_types,code,$id",
        ]);
        $job_type = JobType::find($id);


        $job_type->code  = $request->code;
        $job_type->name = $request->name;


        if ($request->status==0)
            {
                $job_type->status==0;
            }

        $job_type->status = $request->status;

        $job_type->updated_by = Auth::user()->id;

        $job_type->save();

        return redirect()->route('job-types.index')
                        ->with('message_store', 'Job Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobType $jobType)
    {
        //
    }
}
