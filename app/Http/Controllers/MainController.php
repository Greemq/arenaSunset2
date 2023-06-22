<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function uploadFile(Request $request)
    {
        $rules = [
            'type' => 'required',
        ];
        $request->validate($rules);
        $file = $request->file('file');
        $full_file = Str::random(20) . '.' . pathinfo($file->getClientOriginalName())['extension'];
        $type = $request->type;

        $file->storeAs('public/' . $type . '/', $full_file);
        $name = '/storage/' . $type . '/' . $full_file;

        return $name;
    }
}
