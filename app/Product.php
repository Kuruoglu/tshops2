<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(empty($value) ? $this->name : $value, '-');
    }

    public function setImgAttribute($value)
    {
        $fName = $value->getClientOriginalName();
        $value->move(public_path('uploads'), $fName);
        $this->attributes['img'] = '/uploads' . $fName;
    }
}
