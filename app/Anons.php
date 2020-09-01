<?php

namespace App;

use App\Brand;
use App\Category;
use App\User;
use App\Member;
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
