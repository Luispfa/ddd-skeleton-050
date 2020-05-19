<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses\Application;

use CodelyTv\Mooc\Courses\Application\CreateCourseRequest;
use CodelyTv\Mooc\Courses\Domain\CourseId;
use PHPUnit\Framework\TestCase;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Courses\Application\CoursesCreator;

final class CoursesCreatorTest extends TestCase
{

    /** @test */
    public function it_should_create_a_valid_course()
    {
        $repository = $this->createMock(CourseRepository::class);
        $creator = new CoursesCreator($repository);

        $request = new CreateCourseRequest('decf33ca-81a7-419f-a07a-74f214e928e5', 'some-name', 'some-duration');
        $course = new Course(new CourseId($request->id()), $request->name(), $request->duration());
        $repository->method('save')->with($course);
        
        $creator->__invoke($request);
    }

}
