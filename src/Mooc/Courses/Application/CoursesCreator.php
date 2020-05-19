<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application;

use CodelyTv\Mooc\Courses\Domain\CourseId;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\Course;

final class CoursesCreator
{

    private $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateCourseRequest $request)
    {
        $id= new CourseId($request->id());
        $course = new Course($id, $request->name(), $request->duration());
        $this->repository->save($course);
    }

}
