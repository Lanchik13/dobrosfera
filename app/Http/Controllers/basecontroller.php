<?php

namespace App\Http\Controllers;

class basecontroller extends Controller
{
    public function getIndex() {
		return view('index');
	}
}
