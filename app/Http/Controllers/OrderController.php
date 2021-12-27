<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct(
        TelephoneController $telephoneController
    )
    {
        $this->telephoneController = $telephoneController;
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'tel' => $request->tel,
            'theme' => $request->theme
        ];

        $tel = $this->telephoneController->store($data['name'], $data['tel']);

        $order = new Order([
            'tel_id' => $tel['id'],
            'theme' => $data['theme']
        ]);

        $order->save();

        return response()->json($tel);
    }
}
