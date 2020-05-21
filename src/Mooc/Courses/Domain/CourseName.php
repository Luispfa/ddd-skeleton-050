<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

use CodelyTv\Shared\Domain\ValueObject\StringValueObject;

final class CourseName extends  StringValueObject
{
    public function __construct(string $value)
    {
        $this->ensureLengthIsInferiorThan30Characters($value);
        parent::__construct($value);
    }

    private function ensureLengthIsInferiorThan30Characters($value){
        if(strlen($value)>30){
            throw  new \InvalidArgumentException("The ");
        }
    }

}
