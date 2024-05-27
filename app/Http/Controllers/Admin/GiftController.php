<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GiftRequest;
use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class GiftController extends Controller
{
    public function create()
    {
        return view('admin.gift');
    }

    public function edit(Gift $gift)
    {
        return view('admin.gift', compact('gift'));
    }

    public function get(Gift $gift)
    {
        return Response::json($gift->toArray());
    }

    public function store(GiftRequest $request)
    {
        $path = $request->file('image')?->store('gitfs', 'public');
        Gift::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'path_image' => $path,
            'quotas' => $request->get('quotas'),
            'value' => $request->get('value'),
        ]);

        return redirect()->route('dashboard');
    }
    public function update(GiftRequest $request, Gift $gift)
    {
        $path = $request->file('image')?->store('gitfs', 'public');

        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'quotas' => $request->get('quotas'),
            'value' => $request->get('value'),
        ];

        if ($path !== null) {
            $data['path_image'] = $path;
        }

        $gift->update($data);

        return redirect()->route('dashboard');
    }

    public function destroy(Gift $gift)
    {
        $deleted = $gift->delete();

        return redirect()->route('dashboard');
    }
}
