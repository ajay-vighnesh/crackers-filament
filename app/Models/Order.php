<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
 
    protected $fillable = ['customer', 'date', 'total', 'shipping_address', 'orderstatus'];
}
