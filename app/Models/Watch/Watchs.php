<?php

namespace App\Models\Watch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchs extends Model
{
    protected $fillable = [
        'name',
        'image',
        'gender',
        'watch_type_id',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(WatchTypes::class);
    }
}
