<?php

namespace SenorWesley\ModelLogger\Components;

use SenorWesley\ModelLogger\Models\Log;

trait Loggable
{
    protected $entity = 'name';
    protected $method = 'database';

    public function did($action)
    {
        $this->method == 'database' ? model_logger($this, $this->getEntity(), $action)->toDatabase() : null;
    }

    private function getEntity()
    {
        return $this->getAttribute($this->entity);
    }

    public function logs()
    {
        return $this->morphMany(Log::class, 'subject');
    }
}