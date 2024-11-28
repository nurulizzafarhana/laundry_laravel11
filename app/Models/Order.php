<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id_customer', 'order_code', 'order_date', 'order_end_date', 'order_status'];
    // protected $table = "type_of_services";

    //Object Relation Mapping/Model
    // LEFT JOIN, RIGHT JOIN, INNER JOIN, OUTER JOIN
    // One to Many, MtO, MtM

    public function customer() {
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
}
