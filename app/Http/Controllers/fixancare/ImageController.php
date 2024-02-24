<?php

namespace App\Http\Controllers\fixancare;

use App\Models\fixancare\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
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
        $images = Image::all();
        return view('back_end.fixancare.images.index',compact('images'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back_end.fixancare.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'code' => 'required|unique:images,code',
            'title' => 'required',
            'name' => 'required',
            'url' => 'required',
            'type' => 'required',
            'group' => 'required',
            'parent' => 'required',
        ]);
        $image = new Image();


        $image->code  = $request->code;
        $image->title = $request->title;
        $image->name = $request->name;

        $file_name=$request->code.'.jpg';
        $file=$request->file('url');
        $folder=$request->type;
        $path = Storage::disk('public')->putFileAs('images/fixancare/'.$folder,$file,$file_name);

        // dd($file);
        $image->url = $path;
        $image->type = $request->type;
        $image->group = $request->group;
        $image->parent = $request->parent;
        $image->description = $request->description;


        if ($request->status==0)
            {
                $image->status==0;
            }

        $image->status = $request->status;

        $image->created_by = Auth::user()->id;
        $image->updated_by = Auth::user()->id;

        $image->save();

        return redirect()->route('images.index')
                        ->with('message_store', 'Image Created Successfully');




        // if($oldAvatar = $request->user()->avatar){
        //     Storage::disk('public')->delete($oldAvatar);
        // }
        // $file_name=Auth::user()->email.'.jpg';

        // $file=$request->file('avatar');

        // $path = Storage::disk('public')->putFileAs('images/avatars/users',$file,$file_name);
        // $id=Auth::user()->id;
        // $user  = User::findOrFail($id);
        // $user->avatar=$path;
        // $user->update();
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
