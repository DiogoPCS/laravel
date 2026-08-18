<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfflineController extends Controller
{
    public function getData(Request $request)
    {
        $data = [
            'articles' => Article::all(),
            'users' => User::select('id', 'name')->get(),
            'settings' => Setting::all()
        ];
        
        return response()
            ->json($data)
            ->header('Cache-Control', 'public, max-age=3600')
            ->header('ETag', md5(json_encode($data)));
    }
}
