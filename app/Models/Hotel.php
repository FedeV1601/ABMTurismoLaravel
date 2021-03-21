<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "direccion",
        "categoria",
        "id_ciudad",
        "descripcion",
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    
}
