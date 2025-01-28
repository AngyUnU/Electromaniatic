<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Products extends Model
{
    use HasFactory;


    protected $fillable=[
        'entry_date',
         'name_pd',
         'description_pd',
         'categorie',
         'price',
         'stock',
         'image'
    ];

  //funcion client
public function categories():BelongsTo{
      return $this->belongsTo(Categories::class,'categorie','id');
                        }
}
