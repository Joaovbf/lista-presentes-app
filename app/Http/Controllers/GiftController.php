<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GiftController extends Controller
{
    public function index() : View
    {
        $gifts = Gift::all();
        return view('index', compact('gifts'));
    }

    public function get(int $giftId) : View
    {
        $gift = Gift::find($giftId);
        return view('item', compact('gift'));
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('gitfs', 'public');
        $gift = new Gift();
        $gift->description = 'Bermuda amarela para o noivo';
        $gift->link = 'teste';
        $gift->path_image = $path;
        $gift->quotas = 1;
        $gift->value = 100;
        $gift->save();

        return redirect();
    }

}
