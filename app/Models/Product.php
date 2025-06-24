<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    public $incrementing = true; 
    protected $table = 'product';
    public $timestamps = false;

    protected $fillable = [
        'name_product', 'price', 'id_type_product', 'image_url', 'quantity', 'unit_type'
    ];
public function typeProduct()
{
    return $this->belongsTo(TypeProduct::class, 'id_type_product', 'id');
}

}
