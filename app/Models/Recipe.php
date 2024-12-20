<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = [
        'image_url',
        'name',
        'duration',
        'rating',
    ];

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function directions()
    {
        return $this->hasMany(Direction::class);
    }
}
