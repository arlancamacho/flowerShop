<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_description',
        'quantity',
        'price',
        'status',
    ];

    public function orders()
{
    return $this->hasMany(order_table::class);
}

}
