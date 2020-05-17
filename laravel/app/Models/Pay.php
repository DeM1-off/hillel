<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pay extends Model
{
    use SoftDeletes;

    /**
     * @var string[]
     */

    protected $fillable = [
        'id',
        'spending',
        'sum',
        'comment'

    ];
}
