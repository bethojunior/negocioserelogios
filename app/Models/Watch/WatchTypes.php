<?php

namespace App\Models\Watch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchTypes extends Model
{
    protected $table = 'watch_type';

    protected $fillable = [
        'name'
    ];
}
