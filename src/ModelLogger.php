<?php

namespace SenorWesley\ModelLogger;

class ModelLogger
{
    private $subject;
    private $entity;
    private $action;

    public function __construct($subject, $entity, $action)
    {
        $this->subject = $subject;
        $this->entity = $entity;
        $this->action = $action;
    }

    public function toDatabase()
    {
        return $this->subject->logs()->create([
            'entity' => $this->entity,
            'action' => $this->action
        ]);
    }
}