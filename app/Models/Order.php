<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'tol',
        'phone',
        'user_id',
        'product_id',
        'status',
        'size',
        'color',
        'quantity',
        'totalprice',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
