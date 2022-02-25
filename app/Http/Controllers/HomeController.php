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
}
