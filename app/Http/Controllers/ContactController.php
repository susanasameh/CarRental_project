<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::get();
        return view('admin.contact.messageTable',compact('contact'));
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
        // $messages= [
            //     'firstName'=>'please enter your first name',
            //     'lastName'=>'please enter your last name',
            //     'email'=>'please enter your email',
            //     'message'=>'should be text',
            // ];
        
            //     $data = $request->validate([
            //         'firstName'=>'required|string|max:50',
            //         'lastName'=>'required|string|max:50',
            //         'email'=>'required|string',
            //         'message'=>'required',
        
            //        ],$messages);
        
            //        Contact::create($data);
            //     // return dd($request);
            //    Mail::to('susana@example.com')->send(new ContactMail($data));
        
            //    return back()->with('success','Email sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        Contact::where('id', $id)->update(['unreadMessage' => 1]);

        $contact=Contact::findOrFail($id);
        // return dd($contact);
        return view('admin/contact/showMessage',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id',$id)->delete();
        return redirect('admin/messageTable');
    }

    public function contactMail(Request $request)
    {

        $messages= [
        'firstName'=>'please enter your first name',
        'lastName'=>'please enter your last name',
        'email'=>'please enter your email',
        'message'=>'should be text',
    ];

        $data = $request->validate([
            'firstName'=>'required|string|max:50',
            'lastName'=>'required|string|max:50',
            'email'=>'required|string',
            'message'=>'required',

           ],$messages);

           Contact::create($data);
        // return dd($request);
       Mail::to('susana@example.com')->send(new ContactMail($data));

       return back()->with('success','Email sent successfully');
    }

    public function unreadMessage(){

        // $contact = Contact::where('unreadMessage', 0)->get();

        // return view('admin/contact/unreadMessage', compact('contact'));

        // Assuming you're using a model or query builder
// $unreadMessages = Contact::where('unreadMessage', 0)->get();

// // Pass $unreadMessages to the view instead of $contact
// return view('admin/contact/unreadMessage', ['contact' => $unreadMessages]);
//     }

// $unreadMessages = Contact::where('unreadMessage', 0)->get();

//     return view('admin/includes/topNavigation', compact('unreadMessages'));
//     }

    $unreadContacts = Contact::where('unreadMessage', 0)->get();
    // $selectedContactId = // Retrieve the selected contact ID (if applicable)

    // return view('admin/includes/topNavigation', compact('unreadContacts', 'selectedContactId'));
    return view('admin/includes/topNavigation', compact('unreadContacts'));
}
}
