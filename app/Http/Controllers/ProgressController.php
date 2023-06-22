<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProgressController extends Controller
{
    public function index()
    {
        return Progress::orderBy('date')->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {

        $request->validate([
            'date' => 'required',
            'translations.0.description' => 'required',
            'translations.0.img' => 'nullable',
            'translations.0.link' => 'nullable',
            'translations.1.description' => 'required',
            'translations.1.img' => 'nullable',
            'translations.1.link' => 'nullable',

        ]);

        $arr = [
            'date' => $request->date,
            'ru' => [
                'description' => $request->translations[0]['description'],
                'img' => $request->translations[0]['img'],
                'link' => $request->translations[0]['link']
            ],
            'kk' => [
                'description' => $request->translations[1]['description'],
                'img' => $request->translations[0]['img'],
                'link' => $request->translations[0]['link']
            ],

        ];

        $progress = Progress::create($arr);
        return ['id' => $progress->id];
    }

    public function show($id)
    {
        return Progress::with(['translations' => function ($q) {
            $q->orderBy('id');
        }])->find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'translations.0.description' => 'required',
            'translations.0.img' => 'nullable',
            'translations.0.link' => 'nullable',
            'translations.1.description' => 'required',
            'translations.1.img' => 'nullable',
            'translations.1.link' => 'nullable',

        ]);

        $arr = [
            'date' => $request->date,
            'ru' => [
                'description' => $request->translations[0]['description'],
                'img' => $request->translations[0]['img'],
                'link' => $request->translations[0]['link']
            ],
            'kk' => [
                'description' => $request->translations[1]['description'],
                'img' => $request->translations[0]['img'],
                'link' => $request->translations[0]['link']
            ],

        ];
        Progress::find($id)->update($arr);
        return ['success' => true];
    }

    public function destroy(Progress $flat)
    {
        //
    }

    public function allProgress()
    {
        return Progress::orderBy('date')->get();
    }
}
