<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
  use HasFactory;
  protected $table = 'app.wineries';
  protected $attributes = [
    'winery_id',
    'name',
    'code',
    'color',
    'description',
    'status'
  ];

  // protected $attributes= ['full_name'];

  //uno a uno
  // function product(){
  //     return $this.->hasOne(Product::class)
  // }

  //uno a varios
  function products(){
    return $this->hasMany(Product::class);
  }

  //vario a varios
  // function products(){
  //   return $this.->belongsToMany(Product::class)->withTimestamps();
  // }

  //Mutators
  // function setCodeAttribute($value){
  //   $this->attributes['code'] = $value+
  // }

  //Accessors
  // function setFullNameAttribute() {
  //   return $this->attribute['code'].$this->attributes.['description']
  // }
}