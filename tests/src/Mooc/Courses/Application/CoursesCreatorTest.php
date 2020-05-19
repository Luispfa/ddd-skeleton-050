<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses\Application;

use CodelyTv\Mooc\Courses\Application\CreateCourseRequest;
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

        $id = 'some-id';
        $name = 'some-name';
        $duration = 'some-duartion';
        
        $course = new Course($id,$name,$duration);
        $repository->method('save')->with($course);
        
        $creator->__invoke(new CreateCourseRequest($id, $name, $duration));
    }

}
