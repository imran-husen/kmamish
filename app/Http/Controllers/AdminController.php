<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinUser;

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



// I am writing the code of the stored the data of that user which have join you
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:join_users,email',
        'phone' => 'required|string|max:20',
        'interest' => 'required|string',
    ]);

    JoinUser::create($validated);

    return back()->with('success', 'Your form has been submitted successfully!');
}
    
}
