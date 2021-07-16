<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     protected $table= 'products';
     protected $fillable=['id','product_name','product_price','product_quantity'];

   public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

}
