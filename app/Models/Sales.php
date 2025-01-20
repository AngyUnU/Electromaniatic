<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sales extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id', 'category_id','client_id','employe_id','fecha_venta'
    ];
    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'category_id');
    }
    public function products():BelongsTo{
        return $this->belongsTo(Products::class,'products_id');
    }
    public function client():BelongsTo{
        return $this->belongsTo(Client::class,'client_id');
    }
}
