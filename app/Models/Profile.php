<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class   Profile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'userId', 'firstname', 'lastname', 'birthDay',
    ];
}
