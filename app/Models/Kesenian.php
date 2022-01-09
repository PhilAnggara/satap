<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kesenian extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kesenian';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
