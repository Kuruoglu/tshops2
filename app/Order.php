<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Anons;

class Order extends Model
{
    protected $guarded=[

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function anons()
    {
        return $this->belongsTo(Anons::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }



//    public function setStatusIdAttribute($value)
//    {
//        $this->attributes['status_id'] = 1;
//    }
}
