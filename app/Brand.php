<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];

    public function anonses()
    {
        return $this->belongsTo(Anons::class);
    }
}
