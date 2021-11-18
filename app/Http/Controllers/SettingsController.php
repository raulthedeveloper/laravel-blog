<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

use Auth;



class SettingsController extends Controller
{
    public function settingsGeneral()
    {
        return view('settings.general')->with('title','General Settings')->with('profile_avatar',auth()->user()->avatar);
    }

    public function uploadAvatar(Request $request)
    {

        if($request->hasFile('image'))
            {
         
            $filename = $request->image->getClientOriginalName();
            $filenameExploded = explode(".", $filename);
            
            //Adds unique Id to avatar image name to prevent deletion of same name
           $filenameWithId = implode(".",[$filenameExploded[0] . uniqid('_', false),$filenameExploded[1]]);

           // Checks if there is a previous avatar image if so it gets deleted
           if(auth()->user()->avatar)
           {
               Storage::delete('/public/images/profile_avatar/' . auth()->user()->avatar);
           }

            $request->image->storeAs('images/profile_avatar',$filenameWithId,'public');
            User::find(auth()->user()->id)->update(['avatar'=>$filenameWithId]);

            }
        
        return redirect()->back()->with('message','Avatar Updated');
    }

    
}
