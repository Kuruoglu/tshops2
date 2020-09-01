<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anons;

class Member extends Model
{
   protected $guarded = [];

    public function anons()
    {
        return $this->belongsTo(Anons::class);
   }
}
