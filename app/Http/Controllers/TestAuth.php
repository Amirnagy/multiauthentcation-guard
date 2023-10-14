<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAuth extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return response()->json(compact("user"));
    }
}
