<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $table = 'app.episodes';
    protected $fillable = [
        'title',
        'season',
        'air_date',
        'episode'
    ];
    //one to one
    // public function character()
    // {
    //     return $this->hasOne(Character::class);
    // }
    //Relación de one to many
    function characters()
    {
        return $this->hasMany(Character::class);
    }
    //Relación de many to many
    // function characters()
    // {
    //     return $this->belongsToMany(Character::class);
    // }
    //Mutators
    function setEpisodeAttribute($value)
    {
        $this->attributes['episode'] = strtoupper($value);
    }
    function setSeasonAttribute($value)
    {
        $this->attributes['season'] = strtoupper($value);
    }
}
