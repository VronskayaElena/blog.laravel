<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function upload(Request $request){
        $path = '';
        if ($request->file('image') != null) {
            $path = $request->file('image')->store('app/public/uploads', 'public');
        }
        return view('admin.images.index', ['path' => $path]);
    }
}
