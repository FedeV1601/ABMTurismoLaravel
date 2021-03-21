<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
}
