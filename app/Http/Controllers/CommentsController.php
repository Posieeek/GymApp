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
        $this->validate(request(), ['body' =>'required|min:2']);
        $profile ->addComment(request('body'));

        // Comment::create([
        //     'body' => request('body'),
        //     'profile_id' => $profile ->id
      
//]);
       
    

        return back();
    }
    public function destroy($id)
    {
        comment::where('id',$id)->delete();


        return back()
            ->with('success', __('Komentarz usunięty pomyślnie!'));
    }
    
}