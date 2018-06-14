<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
   public function store(Profile $profile)
    {
        $profile = Profile::with('profile')->where('name', $name)->first();
 
     

        $this->validate(request(), ['body' => 'required|min:2']);

        Comment::create([
            'body' => request('body'),
            'profile_id' => $profile ->id,
           
        ]);

       
    

        return back();
    }

    
}