<?php

namespace App\Livewire\Pages;

use App\Livewire\Components\Page\Product\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use Livewire\Component;

class Products extends Component
{
    public $carts ,$services;
    public function mount()
    {

        $this->services = Service::all();

        $this->carts = Order::where([
            ['user_id', auth()->id()],
            ['state', 'pending']
        ])->get();
    }

    public function getProduct()
    {
        $this->carts = Order::where([
            ['user_id', auth()->id()],
            ['state', 'pending']
        ])->get();
    }

    public function cartClear()
    {
        if (auth()->check()) {
            Order::where([
                ['user_id', auth()->id()],
                ['state', 'pending']
            ])->delete();
            $this->getProduct();
        }

    }

    public function addCart($id)
    {
        if (auth()->check()){
            $order = Product::find($id);
            $order_check=Order::count();
dd($order_check);
            if ($order && !$order_check) {
                Order::create([
                    'user_id' => auth()->id(),
                    'product_id' => $order->id,
                    'amount' =>  $order->offer ?? $order->price,
                    'quantity' => 1,
                    'state' => 'pending',
                ]);
            }
           $this->getProduct();
        }
    }
    public function render()
    {
        return view('livewire.pages.products');
    }
}
