<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Inventories extends Model
{
    use HasFactory;

    protected $fillable=[
        'precio','category', 'stock','product_id','sales_id'
    ];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'category_id');
    }
    public function products():BelongsTo{
        return $this->belongsTo(Products::class,'products_id');
    }
    public function sales():BelongsTo{
        return $this->belongsTo(Sales::class, 'sales_id');
    }

}
