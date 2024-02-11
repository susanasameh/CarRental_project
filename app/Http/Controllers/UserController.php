<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\User;
use App\Models\Contact;

class UserController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();
        $contact = Contact::get();
        return view('admin/user/userTable',compact('user','contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        $contact = Contact::get();
        return view('admin.user.addUser',compact('user','contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'userName'=>'required|string|max:50',
            'email'=>'required|email',
            'password'=>'required',
            // 'password' =>'required|string|min:8|confirmed',
        ], $messages);

        $data['active'] = isset($request->active);

        // User::create($data);

        $user = User::create($data);

        // if (!$user->active) {
        // $user->sendEmailVerificationNotification();
        // }

        // if (!request()->has('admin_created')) {
        //     // Trigger email verification for regular users
        //     $user->sendEmailVerificationNotification();
        // } else {
        //     // Mark admin-created users as verified without sending email
        //     $user->markEmailAsVerified();
        // }

        // Mark admin-created users as verified without sending email
         if ($user->active) {
        $user->markEmailAsVerified();
        }
        return redirect('admin/user');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin/user/showUser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findOrFail($id);
        $contact = Contact::get();
        return view('admin/user/editUser',compact('user','contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'userName'=>'required|string|max:50',
            'email'=>'required|email',
            'password'=>'required',
            // 'password' =>'required|string|min:8|confirmed',
        ], $messages);

        $data['active'] = isset($request->active);
       User::where('id',$id)->update($data);
       $updatedUser = User::find($id);  // Retrieve the updated User object
       if ($updatedUser->active) {
           $updatedUser->markEmailAsVerified();
       }
       return redirect('admin/user');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id',$id)->delete();
        $contact = Contact::get();
        return redirect('admin/user');
    }

    public function messages()
    {
        return [
            'name.string'=>'Should be string',
            'userName.string'=>'Should be string',
            'email'=>'please enter your email',
            'password.string'=>'please enter your password',


        ];
    }
}
