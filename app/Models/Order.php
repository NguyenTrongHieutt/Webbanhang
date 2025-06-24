<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id'; // Khai báo khóa chính
    protected $fillable = [
        'product_id',
        'user_id',
        'price_order',
        'total',
        'created_at'
    ];

   

    // Quan hệ với Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // Quan hệ với User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}