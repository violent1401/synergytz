<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $res = Cart::create(['qnt' => $request->qnt, 'title' => $request->title, 'size' => $request->size]);
        $data = ['id' => $res->id, 'qnt' => $request->qnt, 'title' => $request->title, 'size' => $request->size];
        return $data;
    }
}
