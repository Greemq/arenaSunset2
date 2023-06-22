<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Localization;
use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Flat::paginate(20);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'area' => 'required',
            'price' => 'required',
            'translations.0.img' => 'required',
            'translations.1.img' => 'required',
        ]);

        $arr = [
            'type' => $request->type,
            'area' => $request->area,
            'price' => $request->price,
            'ru' => ['img' => $request->translations[0]['img']],
            'kk' => ['img' => $request->translations[1]['img']],

        ];
        $flats = Flat::create($arr);
        return ['id' => $flats->id];
    }

    public function show($id)
    {
        return Flat::with(['translations' => function ($q) {
            $q->orderBy('id');
        }])->find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'area' => 'required',
            'price' => 'required',
            'translations.0.img' => 'required',
            'translations.1.img' => 'required',
        ]);

        $arr = [
            'type' => $request->type,
            'area' => $request->area,
            'price' => $request->price,
            'ru' => ['img' => $request->translations[0]['img']],
            'kk' => ['img' => $request->translations[1]['img']],

        ];
        Flat::find($id)->update($arr);
        return ['success' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Flat $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        //
    }

    public function allFlats()
    {
        return Flat::orderBy('type')->get();
    }
}
