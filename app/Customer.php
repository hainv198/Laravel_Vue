<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // set time = false -> khong them time vao create_at and update_at
    public $timestamps = false; //set time to false

    //$fillable la dien cot vao
    protected $fillable = [
        'name_customer', 'phone_customer','address_customer','email_customer','city_customer'
    ];
    // $primaryKey la khoa chinh
    protected $primaryKey = 'id_customer';
    // $table => table name
    protected $table ='customer';
}
