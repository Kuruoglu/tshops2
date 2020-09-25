<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Purchase extends Model
{
    protected $guarded = [];

    public function setDatePurchaseAttribute($value)
    {
//        dd($value);
        $this->attributes['date_purchase'] = Carbon::createFromFormat('Y-m-d\TH:i', $value)->format('Y-m-d H:s:i');
    }
    public function getDatePurchaseAttribute($value)
    {
//        dd($value);
        return Carbon::parse($value)->format('d-m-Y H:i');
    }
    public function getDateDeliveryAttribute($value)
    {
//        dd($value);
        return Carbon::parse($value)->format('d-m-Y H:i');
    }

}
