<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CatalogController extends Controller
{
    public function getCategory ($id=null) {
		$obj = Category::find($id);
		return view ('products', compact('obj'));
	}
}

