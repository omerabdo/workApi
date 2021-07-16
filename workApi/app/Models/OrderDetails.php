<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;


     protected $table= 'order_details';
     protected $fillable=['id','order_id','product_id','quantity'];

	public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');

    }//end of users


	public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');

    }//end of users
}
