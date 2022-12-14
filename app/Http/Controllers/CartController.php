<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        //dd($products);
        return view('shop')->withTitle('StarEloboost | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('StarEloboost | CART')->with(['cartCollection' => $cartCollection]);
    }

    public function add(Request$request){
        \Cart::add(array(
            'id'=> $request->id,
            'name'=> $request->name,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'attributes'=> array(
                'image'=> $request->img,
                'slug'=> $request->slug
            )
            ));
            return redirect()->route('cart.index')->with('success_msg', 'item is add!');
    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }


    
    public function payment(Order $order){
        $products = json_decode($order->content);

        return view('cart', compact('order', 'items'));
    }
    
}