<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function about()
    {
        $first='Ankur';
        $last='Panwar';
        return view('Demo',compact('first','last'));
    }

    public function contact()
    {
        return view('contact');
    }
}