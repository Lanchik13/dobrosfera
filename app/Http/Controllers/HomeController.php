<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Category;
use Auth;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$cats = Category::all();
		
		$products = Product :: where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate('3'); 
        
		return view('home', compact ('cats', 'products'));
    }
	
	public function postIndex(ProductRequest $r)
    {
		$r['user_id'] = Auth::user()->id;
		$r['status'] = 'new';
		$r['showhide'] = 1;
		$pic=\App::make('App\Libs\Imag') ->url($_FILES['picture1']['tmp_name']);
		if ($pic) {
			$r['picture'] = $pic;
		}else {
		$r['picture'] = '';
		}
		Product::create($r->all());
        return redirect()->back();
    }
}
