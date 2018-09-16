<?php

namespace App\Services\MyClass;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    protected $table = 'class';

    protected $fillable = [
        'name'
    ];

    public function profiles()
    {
        return $this->hasMany(\App\Services\Profiles\Profile::class, 'class_id');
    }
}
