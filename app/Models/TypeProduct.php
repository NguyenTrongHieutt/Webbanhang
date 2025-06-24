<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    use HasFactory;

    protected $table = 'type_product'; // nếu tên bảng không phải dạng số nhiều

    protected $fillable = ['id','name', 'description', 'created_at', 'updated_at'];

    public function products() {
        return $this->hasMany(Product::class, 'id_type_product', 'id');
    }
}