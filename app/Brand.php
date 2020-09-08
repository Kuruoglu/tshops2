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
}
