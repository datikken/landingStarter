<?php

namespace App\Http\Controllers;

use App\Notifications\OrderProcessed;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

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

        $user = User::find(1);
        $user->notify(new OrderProcessed($order));

        return response()->json($tel);
    }
}
