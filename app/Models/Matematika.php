<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matematika extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'matematika';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
