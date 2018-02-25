<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = "cart";
    protected $fillable = [
        'qnt', 'title', 'size'
    ];
}
