<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $data = $request->all();
        return view('dashboard',$data);
    } //
}
