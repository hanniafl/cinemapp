<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'director', 'valoracion', 'resena', 'fecha_visto', 'comentarios_id'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
