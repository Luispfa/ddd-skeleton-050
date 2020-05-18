<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

final class Course
{

    private $id, $name, $duration;

    public function __construct(string $id, string $name, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
    }

    function id()
    {
        return $this->id;
    }

    function name()
    {
        return $this->name;
    }

    function duration()
    {
        return $this->duration;
    }

}
