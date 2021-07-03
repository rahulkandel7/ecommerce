<?php

namespace App\Models;

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'p_desc',
        'sku',
        'category_id',
        'price',
        'first_image',
        'second_image',
        'third_image',
        'isStock',
        'product_size_id',
        'product_color_id',
        'gender',
        'sizes',
        'colors',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favroite()
    {
        return $this->belongsTo(Favroite::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
