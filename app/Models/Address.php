<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','line_one', 'line_two', 'city', 'state', 'postal_code'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
