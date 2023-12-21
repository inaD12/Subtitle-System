<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['film_id', 'content'];

    public function film()
    {
        return $this->belongsToMany(Film::class);
    }
}
