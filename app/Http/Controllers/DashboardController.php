<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use GuzzleHttp\Psr7\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $gifts = Gift::all();
        return view('dashboard', compact('gifts'));
    }
}
