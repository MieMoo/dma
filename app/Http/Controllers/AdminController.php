<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function show() { return view('admin.dashboard'); }
    public function archivedDocuments() { return view('admin.archivedD'); }
   
    public function activityLogs()
    {
         
        return view('admin.activityLogs');

    }
    public function deactivate(Request $request) 
    {
        $query = $request->input('search');

        $users = DB::table('users');

        if ($query) {
            $users->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->orWhere('role', 'LIKE', "%{$query}%");// Ensure this line ends with a semicolon
        }
        $users = $users->get();

        return view('admin.deactivate', ['users' => $users, 'search' => $query]); 
       
    }
    public function documentManagement() { return view('admin.docuM'); }

    public function lockAccount(Request $request) 
    {
        $query = $request->input('search');

        $users = DB::table('users');

        if ($query) {
            $users->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->orWhere('role', 'LIKE', "%{$query}%");// Ensure this line ends with a semicolon
        }
        $users = $users->get();

        return view('admin.LockA', ['users' => $users, 'search' => $query]); 
        
    }


    public function modify() { return view('admin.modify'); }

    public function userManagement(Request $request)
    {
        $query = $request->input('search');

        $users = DB::table('users');

        if ($query) {
            $users->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->orWhere('role', 'LIKE', "%{$query}%");// Ensure this line ends with a semicolon
        }
        $users = $users->get();

        return view('admin.UserM', ['users' => $users, 'search' => $query]);
        
    }
}

