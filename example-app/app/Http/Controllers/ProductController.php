<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Lavravel hehe";
        $myPhone = [
            'name' => 'iphone1',
            'price' => 12233,
            'slug' => "iphone-1"
        ];
        return view('products.index', compact('myPhone'));
    }

}
