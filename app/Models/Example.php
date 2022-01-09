<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Example extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'table';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
