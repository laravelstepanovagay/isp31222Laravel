<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
//        $orders = Order::with(["category"])->where("user_id", Auth::id())->orderBy("created_at", "desc")->get();
//        $orders = Order::get();
        $orders = Auth::user()->orders()->with(["category"])->orderBy('created_at', 'desc')->get();
        return view("order", compact("orders"));
    }

    public function show(Order $order) {
        return view ("shop", ["order" => $order]);
    }

    public function create()
    {
        $categories = Category::orderBy("title")->get();
        return view("create", compact("categories"));
    }
    public function store(OrderRequest $request) {
        if($request->hasFile("image")) {
            $file = Storage::put("images", $request->file("image"));
        }

    $order = Order::create([
        "category_id" => $request->category_id,
        "user_id" => Auth::id(),
        "image" => $file,
        "description" => $request->description,
    ]);
    }
    public function destroy(Order $order)
    {
//        Order::where("id", $order)->delete();
        if ($order->user_id !== Auth::id()) {
            abort(404
            );
        }
        if( $order->delete()) {
            return redirect()->back();
        } else {
            abort(400);
        }
    }
}
