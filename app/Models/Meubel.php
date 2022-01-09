<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meubel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'meubel';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
