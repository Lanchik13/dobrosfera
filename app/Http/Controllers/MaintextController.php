<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintextController extends Controller
{
    public function getindex ($url=null) {
		return view('static', compact('url'));
	}
}
