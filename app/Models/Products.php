<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Products extends Model
{
    use HasFactory;


    protected $fillable=[
        'fecha_ingreso', 'name_pd','descripcion_pd','precio','category_id','stock','imagen'
    ];

  //funcion client
public function category():BelongsTo{
      return $this->belongsTo(Category::class,'category_id');
                        }
}
