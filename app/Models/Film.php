<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Film extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['title', 'year', 'genre', 'image'];
    

    public function subtitles()
    {
        return $this->hasMany(Subtitle::class);
    }

    public static function boot()
    {
        parent::boot();
    
        static::deleting(function($obj) {
            if ($obj->image !== null) {
                Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
            }
        });
    }



public function setImageAttribute($value)
{

    $attribute_name = "image";
    $destination_path = "films";

    if ($value == null) {
        Storage::delete(Str::replaceFirst('storage/', 'public/', $this->{$attribute_name}));

        $this->attributes[$attribute_name] = null;
    } elseif ($value instanceof \Illuminate\Http\UploadedFile) {
        $disk = "public";
        $fileName = md5($value->getClientOriginalName() . random_int(1, 9999) . time()) . '.' . $value->getClientOriginalExtension();
        Storage::putFileAs("public/" . $destination_path, $value, $fileName, $disk);
        $this->attributes[$attribute_name] =  'storage/films/' . $fileName;
    } else {
        $this->attributes[$attribute_name] = 'storage/films/' . $value;
}
}




public function scopeSearch($query, $search)
{
    return $query->where('title', 'like', '%' . $search . '%')
                 ->orWhere('genre', 'like', '%' . $search . '%');
}

}
