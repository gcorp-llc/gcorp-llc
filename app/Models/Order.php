<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $with = ['product'];
    protected $fillable = [
        'user_id',
        'product_id',
        'amount',
        'quantity',
        'state',
        'payment_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
