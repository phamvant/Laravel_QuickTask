<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productid',
        'images',
        'nameproduct',
        'price',
        'categoryid',
        'supplierid',
        'warehouseid'
    ];
}
