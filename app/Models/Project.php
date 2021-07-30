<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'app.projects';
    protected $fillable = [
        'code',
        'description',
        'title',
        'date',
        'approved'
    ];
    protected $casts = [
        'is_approved' => 'datetime:Y-m-d',
        'date' => 'datetime:Y-m-d h:m:s'
    ];

    // protected $attributes = [
    //     'full_name'
    // ];

    //Asume que es publico
    //Caso proyecto one to one
    // public function author()
    // {
    //     return $this->hasOne(Author::class);
    // }
    //Caso proyecto one to many
    function authors()
    {
        return $this->hasMany(Author::class);
    }

    //Caso proyecto many to many
    // function authors()
    // {
    //     return $this->belongsToMany(Author::class);
    // }
    //Mutators
    function setCodeAttribute($value)
    {
        $this->attributes['code'] = 'abc' . strtoupper($value);
    }
    // function setDescriptionAttribute($value)
    // {
    //     $this->attributes['season'] = strtoupper($value);
    // }
    // Accessors
    //Muta la información epero luego de obtenerla
    function getCodeAttribute()
    {
        return $this->attributes['id'] . strtolower($this->attributes['code']);
    }
    // function getFullNameAttribute()
    // {
    //     return $this->attributes['code'] . $this->attributes['description'];
    // }
}
