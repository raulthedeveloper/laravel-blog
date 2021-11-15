<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;



class SettingsController extends Controller
{
    public function settingsGeneral()
    {
        return view('settings.general')->with('title','General Settings');
    }

    public function uploadAvatar(Request $request)
    {

        if($request->hasFile('image'))
            {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            User::find(auth()->user()->id)->update(['avatar'=>$filename]);

            }
        
        return redirect()->back()->with('message','Image Uploaded');
    }
}
