<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Write the code for the routings of the login admin page
    public function login(){
        return view('admin.adminlog');
    }





    // accountant login panels usings the verification
   public function dashboard(Request $request)
{
    if ($request->isMethod('post')) {
        $data = $request->all();

        if (isset($data['mail'], $data['pass'])) {
            if ($data['mail'] === "president@bahuayamiparty.in" && $data['pass'] === "kmamish@2025") {
                return view('admin.dashboard');
            }
        }

        return back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
    } else {
        return view('admin.dashboard');
    }
}

}
