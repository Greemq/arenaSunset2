<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::get();
    }

    public function store(Request $request)
    {
        $request->validate(['phone' => 'required|digits:11']);
        $format = preg_replace("/^(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})$/", "8 ($2) $3 $4 $5", $request->phone);

        Contact::create(['phone' => $format]);
        return ['success' => true];

    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        return ['success' => true];
    }

    public function makeMain($id)
    {
        $tmp = Contact::get();
        $tmp->each(function ($item) use ($id) {
            $item->update(['is_main' => $item->id == $id]);
        });
        return ['success' => true];
    }

    public function allContacts()
    {
        return Contact::orderByDesc('is_main')->get();
    }
}
