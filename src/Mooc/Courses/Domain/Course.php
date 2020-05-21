<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

final class Course
{

    private $id, $name, $duration;

    public function __construct(CourseId $id, CourseName $name, CourseDuration $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
    }

    function id(): CourseId
    {
        return $this->id;
    }

    function name(): CourseName
    {
        return $this->name;
    }

    function duration(): CourseDuration
    {
        return $this->duration;
    }

}
