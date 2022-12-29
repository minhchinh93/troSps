<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class troController extends Controller
{
    //
    public function index()
    {
        return view('trosps');
    }

    public function trosps(Request $request)
    {
        $SHOPNAME = $request->SHOPNAME;
        return view('return',
            [
                'shopname' => $SHOPNAME,
            ]);
    }
}
