<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $table = 'app.characters';
    protected $fillable = [
        'name',
        'birthday',
        'status',
        'nickname'
    ];
    // one to one
    // public function episode()
    // {
    //     return $this->belongsTo(Episode::class);
    // }
    // many to one
    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
    //many to many
    // function episodes()
    // {
    //     return $this->belongsToMany(Episode::class);
    // }
}
