<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'name_ar',
        'name_en',
        'ssn',
        'countryCode',
        'ssn_photo_face',
        'ssn_photo_back',
        'profile_photo',
        'phone',
        'user_name',
        'email',
        'password',
        'created_at',
        'updated_at',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
