<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beverage;

class BeverageController extends Controller
{
    //

    public function index()
    {
        $beverage = Beverage::all();
        return view('Beverage.index',compact('beverage'));
    }

    public function show(Beverage $beverage)
    {
        return view('Beverage.show',compact('beverage'));
    }
}
