<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackendDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function backup()
    {

        $files = Storage::allFiles('public/fixancare');
        // dd($files);
        return view('back_end.fixancare.backup.backup', compact('files'));
    }
    public function backupDownload($filename)
    {
        return Storage::download('public/fixancare/' . $filename);
    }


    public function index()
    {
        $users = User::all();
        return view('back_end.dashboard', compact('users'))->with('i');
    }
    public function fetchUsers()
    {
        // $users = User::all();
        $users = User::count();
        return response()->json([
            'users' => $users,
        ]);
    }
}
