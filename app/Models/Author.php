<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'app.authors';

    protected $fillable = [
        'email',
        'names',
        'identificacion',
        'phone',
        'age'
    ];
    //Relación de one to one
    // function project()
    // {
    //     return $this->belongsTo(Project::class);
    // }
    //Relación de many to one
    function project()
    {
        return $this->belongsTo(Project::class);
    }
    //Relacion de many to many
    // function projects()
    // {
    //     return $this->belongsToMany(Project::class);
    // }
}
