<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anons;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'img',
        'parent_id'
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function anonses()
    {
        return $this->belongsToMany(Anons::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = \Str::slug(empty($value) ? $this->name : $value, '-');
    }


}
