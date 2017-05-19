<?php

namespace SenorWesley\ModelLogger\Models;

use Moloquent\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'action', 'entity',
    ];

    public function subject()
    {
        return $this->morphTo();
    }
}