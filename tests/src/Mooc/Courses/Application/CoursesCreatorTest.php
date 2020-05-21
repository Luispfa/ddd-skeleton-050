<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses\Application;

use CodelyTv\Tests\Mooc\Courses\Application\Create\CreateCourseRequestMother;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;
use PHPUnit\Framework\TestCase;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Application\CoursesCreator;

final class CoursesCreatorTest extends TestCase
{

    /** @test */
    public function it_should_create_a_valid_course()
    {
        $repository = $this->createMock(CourseRepository::class);
        $creator = new CoursesCreator($repository);

        $request = CreateCourseRequestMother::random();
        $course  = CourseMother::fromRequest($request);
        $repository->method('save')->with($course);
        
        $creator->__invoke($request);
    }

}
