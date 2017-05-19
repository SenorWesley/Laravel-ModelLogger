<?php

if (! function_exists('model_logger')) {
    function model_logger($target, $entity, $action)
    {
        return new \SenorWesley\ModelLogger\ModelLogger($target, $entity, $action);
    }
}