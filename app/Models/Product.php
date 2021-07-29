<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $table = 'app.products';
  protected $attributes = [
    'code',
    'description',
    'price',
    'business',
    'actived',
    'date'
  ];
  protected $cast = [
    'actived' => 'boolena',
    'date'=> 'datetime:y-m-d'
  ];


    //uno a uno
    // function winery(){
    //   return $this->belongsTo(Winery::class)
    // }

    //uno a varios
    function winery(){
        return $this->belongsTo(Winery::class);
    }

    //vario a varios
    // function wineries(){
    //   return $this->belongsToMany(Winery::class)
    // }
}
