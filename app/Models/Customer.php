<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'phone', 'address'];
    // protected $table = "type_of_services";
}
