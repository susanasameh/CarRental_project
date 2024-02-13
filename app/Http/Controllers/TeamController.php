<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Traits\Common;

class TeamController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::get();
        return view('admin.team.teamTable',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       
        return view('admin.team.addTeam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'position'=>'required|string|max:50',
            'description'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',

        ],$messages);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['active']=isset($request->active);
        Team::create($data);
        return redirect('admin/teamTable');
    }


    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team=Team::findOrFail($id);
        // return dd($trip);
        return view('admin/team/showTeam',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::findOrFail($id);

        return view('admin/team/editTeam',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'position'=>'required|string|max:50',
            'description'=>'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg,webp|max:2048',

        ],$messages);

        if($request->hasFile('image')){
            //use method from traits called uploadFile
        $fileName=$this->uploadFile($request->image, 'assets/images');
        $data['image']=$fileName;
        //remove old image from server
        unlink("assets/images/" . $request->oldImage);
            }

        $data['active']=isset($request->active);
        Team::where('id',$id)->update($data);
        return redirect('admin/teamTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::where('id',$id)->delete();
        return redirect('admin/teamTable');
    }

    public function messages(){
        return[
            

            'name.required'=>'please enter your name',
            'position.required'=>'please enter your job',
            'description.required'=> 'should be text',           
            'image'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            


        ];
    }
}
