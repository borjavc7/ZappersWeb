<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
    public function index($id)
    {
    	$orders = Order::where('user_id', $id)->orderBy('id', 'desc')->paginate(5);
    	//dd($orders);
    	return view('store.order-detail-user', compact('orders'));
    }

    public function getItems(Request $request)
    {
    	$items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
    	return json_encode($items);
    }
}
