<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'short_desc',
        'full_desc',
        'category_id',
        'brand_id',
        'allow_reviews',
        'price',
        'old_price',
        'qty',
        'img',
        'cross_sell',
        'color'
    ];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
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
        $this->attributes['img'] = '/uploads/' . $fName;
    }
}
