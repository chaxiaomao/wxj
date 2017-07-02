<?php

namespace App\Http\Controllers\view\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

class basketController extends Controller
{
    public function toBasket()
    {
        if (Cart::isEmpty()) {
            return view('home.basket_blank');
        }
        return view('home.basket');
    }
}
