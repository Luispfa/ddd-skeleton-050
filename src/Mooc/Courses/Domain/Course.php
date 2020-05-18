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

    public function __invoke(string $id, string $name, string $duration)
    {
        $course = new Course($id, $name, $duration);
        $this->repository->save($course);
    }

}
