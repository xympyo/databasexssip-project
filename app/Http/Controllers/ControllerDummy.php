<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class ControllerDummy extends Controller
{
    public function test()
    {
        return view("welcome");
    }
    public function adel()
    {
        return view("Components.Dashboard.test");
    }
}
