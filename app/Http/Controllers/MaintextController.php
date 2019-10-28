<?php

namespace App\Http\Controllers;

use App\Maintext;

class MaintextController extends Controller
{
    public function getindex ($url=null) {
		$obj = Maintext::where('url', $url) -> first();
		return view('static', compact('url', 'obj'));
	}
}
