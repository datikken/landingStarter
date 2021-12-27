<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'tel' => $request->tel,
            'theme' => $request->theme
        ];

        return response()->json($data);
    }
}
