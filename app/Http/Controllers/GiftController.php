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
}
