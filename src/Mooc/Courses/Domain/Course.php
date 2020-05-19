<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

final class Course
{

    private $id, $name, $duration;

    public function __construct(CourseId $id, string $name, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
    }

    function id(): CourseId
    {
        return $this->id;
    }

    function name(): string
    {
        return $this->name;
    }

    function duration(): string
    {
        return $this->duration;
    }

}
