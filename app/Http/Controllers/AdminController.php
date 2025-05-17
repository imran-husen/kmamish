<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinUser;
use App\Models\feedbackUser;
use App\Models\notification;

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

             // Here i am sending the data on the admin panles of the join and feedback
             $joinUser = JoinUser::all();
             $totalJoinedUsers = JoinUser::count();
             // This is the user feedback
             $feedback = feedbackUser::all();
             $totalfeedback = feedbackUser::count();
             // This is notification of the user
             $notification= notification::all();
             $totalnotification= notification::count();

             return view('admin.dashboard',compact('joinUser', 'feedback', 'totalJoinedUsers','totalfeedback', 'notification', 'totalnotification'));
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

// Here i am storing the database of the feedback data
public function store_feedback(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        FeedbackUser::create($validated);

        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }



// Here i am writing the code to save the user message
 public function store_notification(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        notification::create($validated);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    
}
