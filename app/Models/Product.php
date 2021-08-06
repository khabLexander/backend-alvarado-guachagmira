<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'app.products';
  protected $fillable = [
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
