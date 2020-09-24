<?php

namespace App;

use App\Brand;
use App\Category;
use App\User;
use App\Member;
use App\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Anons extends Model
{
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at', 'date_purchase'];

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

    public function getImgAttribute($value)
    {
       return $value ? $value : asset('/uploads/no-image.jpg');
    }

    public function setDatePurchaseAttribute($value)
    {

        $this->attributes['date_purchase'] = Carbon::createFromFormat('Y-m-d\TH:i', $value)->format('Y-m-d H:s:i');
    }
    public function getDatePurchaseAttribute($value)
    {
//        dd($value);
        return Carbon::parse($value)->format('d-m-Y H:i');
    }

    public function hasAnons(int $id, $arr) : bool {
        foreach($arr as $pur) {
            if($pur->anons_id == $id) return true;
        }
        return false;
    }

//    public function scopeAnonsAll($query)
//    {
//        return $query->where('user_id', Auth::user()->id)->get();
//    }

}
