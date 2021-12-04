<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public static function deleteRow($table,$rowId,$filePath) {
        $currentImage =  DB::table($table)->where($rowId, $id)->first();

        Storage::delete($filePath . $currentImage->featured_image);

        Post::where($rowId, $id)->delete();
       }
}
