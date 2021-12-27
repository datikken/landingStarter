<?php

namespace App\Http\Controllers;

use App\Models\Telephone;

class TelephoneController extends Controller
{
    public function store($name, $tel)
    {
        $tel = new Telephone([
            'name' => $name,
            'tel' => $tel
        ]);

        $tel->save();

        return $tel;
    }
}
