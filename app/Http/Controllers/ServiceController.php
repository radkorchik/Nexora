<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function development()
    {
        return view('services.development');
    }

    public function landing()
    {
        return view('services.landing');
    }

    public function redesign()
    {
        return view('services.redesign');
    }

    public function ecommerce()
    {
        return view('services.ecommerce');
    }

    public function corporate()
    {
        return view('services.corporate');
    }
}
