<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\JoinUser;
use App\Models\feedbackUser;
use App\Models\notification;
use App\Models\news;
use App\Models\youtube;
use App\Models\blog;
use App\Models\email;
use App\Models\education;
use App\Models\Events;
use App\Models\social;
use App\Models\movements;
use App\Models\writing;
use App\Models\polotics;
use App\Models\regular_events;



class AdminController extends Controller

{

    // Write the code for the routings of the login admin page
    public function login(){
        return view('admin.adminlog');
    }

   //This is code of the success loader
   public function success(){
     return view('admin.success');
   }



    // accountant login panels usings the verification
public function dashboard(Request $request)
{
    if ($request->isMethod('post')) {
        $data = $request->all();

        if (isset($data['mail'], $data['pass'])) {
            if ($data['mail'] === "president@bahuayamiparty.in" && $data['pass'] === "kmamish@2025") {

                $joinUser = JoinUser::all();
                $totalJoinedUsers = JoinUser::count();

                $feedback = feedbackUser::all();
                $totalfeedback = feedbackUser::count();

                $notification= notification::all();
                $totalnotification= notification::count();

                $news = news::all(); 
                $totalnews = news::count(); 

                $videos = youtube::all();
                $totalvideos = youtube::count();

                $blogs = blog::all();
                $totalblog = blog::count();

                $mail = email::all();

                // Add education data
                $education = education::all();
                $totaledu = education::count();

                // send the data on the dashboard
                $events = Events::all();
                $totalEvents = Events::count();


                // This is sending the data to the dashboard
                $socials = social::all();
                $totalsocial = social::count();


                // Send the data to teh databse
                $move = movements::all();
                $totalmove = movements::count();

                // Send the data on the dashboard
                $writings = writing::all();
                $totalwrite = writing::count();

                //Send the data to the dashboard
                $polotics = polotics::all();
                $totalpolotics = polotics::count();

                // Semd the all details in the dashboard
                $reg_image = regular_events::all();

                return view('admin.dashboard', compact(
                    'joinUser',
                    'feedback',
                    'totalJoinedUsers',
                    'totalfeedback',
                    'notification',
                    'totalnotification',
                    'news',
                    'totalnews',
                    'videos',
                    'totalvideos',
                    'blogs',
                    'totalblog',
                    'mail',
                    'education',
                    'totaledu',
                    'events',
                    'totalEvents',
                    'socials',
                    'totalsocial',
                    'move',
                    'totalmove',
                    'writings',
                    'totalwrite',
                    'polotics',
                    'totalpolotics',
                    'reg_image'
                ));
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

        return redirect()->back()->with('success_feedback', 'Feedback submitted successfully!');
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

// Direct upload image in the database

public function store_news(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $filename = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('news_images'), $filename);
        $imagePath = 'news_images/' . $filename;
    }

    News::create([  
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

    return view('admin.success');
}



public function destroy_news($id)
{
    // Make sure you are getting a single News instance
    $news = News::findOrFail($id); // 🔥 This avoids collection issues

    // Delete image from public/news_images if it exists
    if ($news->image) {
        $imagePath = public_path($news->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete the news record
    $news->delete();

    return view('admin.success');
}






    // I am writing the code to save dthe data of teh you tube link
    public function store_video(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url'
        ]);

        youtube::create([
            'title' => $request->title,
            'link' => $request->link
        ]);

        return view('admin.success');
    }

    //This is the code to delete the delete youtube video
     public function deleteVideo($id)
    {
        $video = Youtube::findOrFail($id);
        $video->delete();
        return view('admin.success');
    }


    // This is the controller of the admin dashboard for uploading content
    public function store_blog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return view('admin.success');
    }

    // Destroying of the blog
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return view('admin.success');
    }


    // Store the mail for furthur used
    public function store_email(Request $request)
    {
        $request->validate([
            'email' => 'unique:users,email'
        ]);

        Email::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success_email', 'Thanks for subscribing!');
    }

    // This is achievements of the education controller code
public function store_education(Request $request)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'Educational/' . $imageName; // Add slash here
        $image->move(public_path('Educational'), $imageName);
    }

    education::create([
        'title'       => $request->input('title'),
        'description' => $request->input('description'),
        'image'       => $imagePath,
    ]);

    return view('admin.success');
}


// This is deletion of the uploded education achievements data
public function destroy_education($id)
{
    $education = Education::findOrFail($id);

    // Delete image from public folder
    if ($education->image && file_exists(public_path($education->image))) {
        unlink(public_path($education->image));
    }

    $education->delete();

    return view('admin.success');
}

//This is controller code of the events data
public function store_event(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('events'), $imageName);
            $imagePath = 'events/' . $imageName;
        }

        Events::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return view('admin.success');
    }

    // Destroy of the events data
    public function destroy_events($id)
    {
        $event = Events::findOrFail($id);

        if ($event->image && file_exists(public_path($event->image))) {
            unlink(public_path($event->image));
        }

        $event->delete();

         return view('admin.success');
    }
    

    // This is form controller to saved the data of the events
       public function store_writing(Request $request)
{
    // Validate form inputs
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('writings'), $imageName);
        $imagePath = 'writings/' . $imageName;
    }

    // Save to database
    writing::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

     return view('admin.success');
}

public function destroy_writings($id)
{
    $writing = writing::findOrFail($id);

    // Delete image if it exists
    if ($writing->image && file_exists(public_path($writing->image))) {
        @unlink(public_path($writing->image));
    }

    $writing->delete();

    return view('admin.success');
}


    // This is the controller of the save the data of the social achievements
    public function store_social(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imageName = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('social'), $imageName);
            $imagePath = 'social/' . $imageName;
        }

        social::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return view('admin.success');
    }

    public function destroy_social($id)
    {
        $social = social::findOrFail($id);

        if ($social->image && file_exists(public_path($social->image))) {
            unlink(public_path($social->image));
        }

        $social->delete();

        return view('admin.success');
    }


    // this is controller for the saved the data of the polotics achievemenst
    public function store_polotics(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imageName = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('polotics'), $imageName);
        $imagePath = 'polotics/' . $imageName;
    }

    polotics::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

    return view('admin.success');
}


    public function destroy_polotics($id)
    {
        $polotics = polotics::findOrFail($id);

        if ($polotics->image && file_exists(public_path($polotics->image))) {
            unlink(public_path($polotics->image));
        }

        $polotics->delete();

       return view('admin.success');
    }

    // This is the controller of the movements
     public function store_movements(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('movements'), $imageName);
            $imagePath = 'movements/' . $imageName;
        }

        movements::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

       return view('admin.success');
    }

    public function destroy_movements($id)
    {
        $polotics = movements::findOrFail($id);

        if ($polotics->image && file_exists(public_path($polotics->image))) {
            unlink(public_path($polotics->image));
        }

        $polotics->delete();

       return view('admin.success');
    }


    // THis is code to uploaded the regular events
  public function store_regular_events(Request $request)
    {
        $request->validate([
            'imageTitle' => 'required|string|max:255',
            'imageFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('imageFile');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'regular_events/' . $imageName;

        $image->move(public_path('regular_events'), $imageName); // Save image to public/regular_events

        regular_events::create([
            'title' => $request->imageTitle,
            'image' => $imagePath, // Save path in DB
        ]);

        return view('admin.success'); // Return a view or redirect
    }

    // Here i am writing the code to the delete regula events image
    public function destroy_regular_events($id)
{
    $image = regular_events::findOrFail($id);

    // Delete image file from storage
    if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
        Storage::disk('public')->delete($image->image_path);
    }

    // Delete record from database
    $image->delete();

        return view('admin.success'); // Return a view or redirect
}

}


