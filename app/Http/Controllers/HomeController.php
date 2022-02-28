<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Barang::with('galleries')->get();
        // return response()->json($products, 200);
        // foreach ($products as $value) {
        //     $gambar = $value->galleries[0]->image;
        // }
        // dd($gambar);
        return view('pages.user.home', compact('products'));
    }
    public function show($slug)
    {
        $product = Barang::with('galleries')
            ->where('slug',$slug)
            ->first();

        $products = Barang::with('galleries')->limit(4)->get();
        return view('pages.user.product', compact('product','products'));
    }
}
