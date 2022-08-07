<?php

namespace Modules\Hmbungu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table ='users';

    protected static function newFactory()
    {
        return \Modules\Hmbungu\Database\factories\UserFactory::new();
    }
}
