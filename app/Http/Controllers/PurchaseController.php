<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        return Purchase::filter($request->all())->orderBy('order')->get();
    }

    public function show($id)
    {
        return Purchase::with(['translations' => function ($q) {
            $q->orderBy('id');
        }])->find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'translations.0.title' => 'required',
            'translations.0.description' => 'required',
            'translations.0.btn_text' => 'required',
            'translations.1.title' => 'required',
            'translations.1.description' => 'required',
            'translations.1.btn_text' => 'required',
        ]);
        $order = Purchase::where('type', $request->type)->orderByDesc('order')->first();
        $arr = [
            'type' => $request->type,
            'order' => isset($order) ? $order->order += 1 : 1,
            'ru' => [
                'title' => $request->translations[0]['title'],
                'description' => $request->translations[0]['description'],
                'btn_text' => $request->translations[0]['btn_text'],
            ],
            'kk' => [
                'title' => $request->translations[1]['title'],
                'description' => $request->translations[1]['description'],
                'btn_text' => $request->translations[1]['btn_text'],
            ],

        ];
        $item = Purchase::create($arr);
        return ['id' => $item->id];
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'translations.0.title' => 'required',
            'translations.0.description' => 'required',
            'translations.0.btn_text' => 'required',
            'translations.1.title' => 'required',
            'translations.1.description' => 'required',
            'translations.1.btn_text' => 'required',
        ]);

        $arr = [
            'ru' => [
                'title' => $request->translations[0]['title'],
                'description' => $request->translations[0]['description'],
                'btn_text' => $request->translations[0]['btn_text'],
            ],
            'kk' => [
                'title' => $request->translations[1]['title'],
                'description' => $request->translations[1]['description'],
                'btn_text' => $request->translations[1]['btn_text'],
            ],

        ];
        Purchase::find($id)->update($arr);
        return ['success' => true];
    }

    public function changeOrder(Request $request, $id)
    {
        $request->validate(['direction' => 'required', 'type' => 'required']);
        $item = Purchase::find($id);
        $change = Purchase::where('type', $item->type)->where('order', $request->direction == 'up' ? $item->order - 1 : $item->order + 1)->first();
        $item->update(['order' => $change->order]);
        $change->update(['order' => $request->direction == 'up' ? $change->order + 1 : $change->order - 1]);

        return ['success' => 'true'];

    }
}
