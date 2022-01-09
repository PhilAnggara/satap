<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Elektronik extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'elektronik';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
