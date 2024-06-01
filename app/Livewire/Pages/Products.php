<?php

namespace App\Livewire\Pages;

use App\Livewire\Auth\SignIn;
use App\Livewire\Components\Page\Product\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class Products extends Component
{
    public $carts, $services;

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
        if (auth()->check()) {
            $product = Product::find($id);
            $order = Order::firstWhere([
                ['user_id', auth()->id()],
                ['product_id', $product->id],
                ['state', 'pending']
            ]);
            if ($order) $order_quantity = $order->quantity + 1;
            if (!$order) $order_quantity = 1;
            $order_price = $product->offer ? $product->offer * $order_quantity : $product->price * $order_quantity;
            Order::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'product_id' => $product->id,
                    'state' => 'pending',
                ],
                [
                    'amount' => $order_price,
                    'quantity' => $order_quantity,
                ]);
            $this->getProduct();
        }
        else{
            $this->redirect(SignIn::class);
        }
    }

    public function orderPlus($id)
    {
        $order = Order::find($id);
        $product = Product::find($order->product_id);
        if ($order->quantity >= 1) {
            $order_quantity = $order->quantity + 1;
            $order_price = $product->offer ? $product->offer * $order_quantity : $product->price * $order_quantity;
            Order::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'product_id' => $product->id,
                    'state' => 'pending',
                ],
                [
                    'amount' => $order_price,
                    'quantity' => $order_quantity,
                ]);
        };


        $this->getProduct();
    }

    public function orderMines($id)
    {
        $order = Order::find($id);
        $product = Product::find($order->product_id);
        if ($order->quantity > 1) {
            $order_quantity = $order->quantity - 1;
            $order_price = $product->offer ? $product->offer * $order_quantity : $product->price * $order_quantity;
            Order::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'product_id' => $product->id,
                    'state' => 'pending',
                ],
                [
                    'amount' => $order_price,
                    'quantity' => $order_quantity,
                ]);
        };
        if ($order->quantity <= 1) {
            $order->delete();
        };

        $this->getProduct();
    }

    public function setPayment()
    {
        $orders=Order::where([
            ['user_id', auth()->id()],
            ['state','pending']
        ])->get();
        if ($orders->count()>0){
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $randomCode = Str::random(6, $characters);

            // Check if the code is unique
            while (DB::table('payments')->where('merger_id', $randomCode)->exists()) {
                $randomCode = Str::random(6, $characters);
            }

            $payment = Payment::create([
                'merger_id'=> $randomCode,
                'user_id' => auth()->id(),
                'amount' =>$orders->sum('amount'),
                'status' => 'pending'
            ]);

            foreach ($orders as $order) {
                $order->update([
                    'state'=>'payments',
                    'payment_id' => $payment->id
                ]);
            }
            return redirect()->route('user.payments');
        }


    }

    public function render()
    {
        return view('livewire.pages.products');
    }
}
