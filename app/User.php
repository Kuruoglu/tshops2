<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\HasPermissionsTrait;
use App\Order;
use App\Anons;

class User extends Authenticatable
{
    use Notifiable, HasPermissionsTrait  ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'company',
        'img',
        'phone',
        'role',
        'city',
        'street',
        'bild_number',
        'flat',
        'zip',
        'post_office',
        'post_office_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role == 'admin';
    }

    public function setPasswordAttribute($value)
    {
         $this->attributes['password'] = bcrypt($value);
    }

    public function anonses() {

        return $this->belongsToMany(Anons::class);

    }
    public function anons() {

        return $this->hasOne(Anons::class);

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
