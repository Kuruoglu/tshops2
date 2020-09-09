<?php

namespace App;

use App\Brand;
use App\Category;
use App\User;
use App\Member;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Anons extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(Category::class);
   }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function setImgAttribute($value)
    {
        $fname = $value->getClientOriginalName();
        $value->move(public_path('uploads'), $fname);
        $this->attributes['img'] = '/uploads/' . $fname;
    }

}
