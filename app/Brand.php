<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    protected $guarded = [];

    public function anonses()
    {
        return $this->belongsTo(Anons::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(empty($value) ? $this->name : $value, '-');
    }

    public function setImgAttribute($value)
    {
        $fname = $value->getClientOriginalName();
        $value->move(public_path('/uploads'), $fname);
        $this->attributes['img'] = '/uploads/' . $fname;
    }

    public function getImgAttribute($value)
    {
        return $value ? $value : asset('/uploads/no-image.jpg');
    }
}
