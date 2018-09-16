<?php

namespace App\Services\Profiles;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'nim', 'github', 'address', 'interest', 'bio', 'user_id', 'class_id'
    ];

    public function user()
    {
        return $this->hasOne(\App\User::class, 'user_id');
    }

    public function myClass()
    {
        return $this->belongsTo(\App\Services\MyClass\MyClass::class, 'class_id');
    }
}
