<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sales extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id',
    'client_id',
    'employee_id',
    'sale_date'
    ];
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');  // Establece la relación con la tabla 'products'
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');  // Relación con Client
    }

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');  // Relación con Employee
    }
}
