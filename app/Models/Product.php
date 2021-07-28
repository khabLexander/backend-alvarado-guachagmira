<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $attributes = [
    'code',
    'description',
    'price',
    'business',
    'is_actived',
    'date'
  ];
  protected $cast = [
    'is_actived' => 'boolena',
    'date'=> 'datetime:y-m-d'

  ]


    //uno a uno
    // function winery(){
    //   return $this->belongsTo(Winery::class)
    // }

    //uno a varios
    function winery(){
        return $this->belongsTo(Winery::class)
    }

    //vario a varios
    // function wineries(){
    //   return $this->belongsToMany(Winery::class)
    // }
}
