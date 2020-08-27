<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = \Str::slug(empty($value) ? $this->name : $value, '-');
    }
}
