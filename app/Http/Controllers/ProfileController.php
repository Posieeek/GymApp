<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Image;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::latest()->paginate(0);
        return view('profiles.index',compact('profiles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'user_id',
            'avatar',
            'name' => 'required',
            'last_name' => 'required',
            'height' => 'required',
            'weight'=> 'required',
            'experience' => 'required',
            'diet_name',
            'training_name'
        
        ]);
       
        Profile::update($request->all());
        return redirect()->route('profiles.index')
                        ->with('success','profiles created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.show',compact('profile'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profiles.edit',compact('profile'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'user_id',
            'avatar',
            'name' => 'required',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'diet_name',
            'training_name'
        ]);
        $profile = Auth::user()->profile;
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/img/avatars/' . $filename));

            $profile->avatar = $filename;
        }
        $profile->save();

        Profile::find($id)->update($request->all());
        return redirect()->route('profiles.index')
                        ->with('success','profiles updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::find($id)->delete();
        return redirect()->route('profiles.index')
                        ->with('success','profilese deleted successfully');
    }
}