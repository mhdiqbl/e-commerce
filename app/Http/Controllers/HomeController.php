<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Card;
use App\Models\User;
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
    public function addCard(Request $request, $id)
    {
        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $data['barang_id'] = Barang::findOrFail($id)->id;
        Card::create($data);
        return redirect()->route('card.list');
    }

    public function listCard(Request $request)
    {
        $cards = User::with('cards.barang')->findOrFail($request->user()->id)->cards;
        $total = 0;
        foreach ($cards as $card) {
            $total += $card->quantity * $card->barang->price;
        }
        return view('pages.user.card', compact('cards','total'));
    }
}
