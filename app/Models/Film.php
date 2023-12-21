<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['title', 'year', 'genre'];

    public function subtitles()
    {
        return $this->hasMany(Subtitle::class);
    }
}
