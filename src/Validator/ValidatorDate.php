<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class ValidatorDate extends Constraint
{
    public string $dateDoesNotMatchMessage = 'la date de début doit être inférieur à la date de fin';

    public function getTargets(): string
    {
        return self::CLASS_CONSTRAINT;
    }
}