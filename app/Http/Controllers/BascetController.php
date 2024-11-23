<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BascetForm;


use Illuminate\Support\Facades\Mail;
use App\Mail\BascetSend;

use App\Models\Cart;

class BascetController extends Controller
{
    public function index() {
        return view("bascet");
    }

    public function add(Request $request) {
        $product_id = $request->input('product_id');
        $_token = $request->input('_token');
        
        Cart::add($product_id);

        return array($product_id, $_token);
    }

    public function get_all() {
        $cart_product = Cart::with('tovar_data')->where("carts.session_id", session()->getId())->get(); 
        // $cart_product = Cart::select("carts.*", "products.img", "products.name", "products.state", "products.brand")->leftJoin("products", "products.sku", "=", "carts.product_sku")->where("carts.session_id", session()->getId())->get(); 
        // dd($cart_product);
        return $cart_product;
    }

    public function clear() { 
        return Cart::where("session_id", session()->getId())->delete(); 
    }

    public function update(Request $request) {
        $product_id = $request->input('product_id');
        $new_count = $request->input('count');
        return Cart::update_tovar($product_id, $new_count);
    }

    public function delete(Request $request) {
        $product_id = $request->input('product_id');
        return Cart::delete_tovar($product_id);
    }

    public function send(BascetForm $request) {
        Mail::to("asmi046@gmail.com")->send(new BascetSend($request));
    }
}
