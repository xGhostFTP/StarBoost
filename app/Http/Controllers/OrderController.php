<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Iluminate\Http\Request;

class OrderController extends CartController
{
    public function payment(Order $order){
        
        $items = json_decode($order->content);

        return view('cart', compact('order', 'items'));
    }

}
?>

