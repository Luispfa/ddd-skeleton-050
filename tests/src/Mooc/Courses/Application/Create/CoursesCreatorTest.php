<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses\Application\Create;

use CodelyTv\Tests\Mooc\Courses\CoursesModuleUnitTestCase;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;
use CodelyTv\Mooc\Courses\Application\CoursesCreator;

final class CoursesCreatorTest extends CoursesModuleUnitTestCase
{
    private $creator;

    public function setUp(): void
    {
        parent::setUp();
        $this->creator= new CoursesCreator($this->repository());
    }

    /** @test */
    public function it_should_create_a_valid_course(): void
    {
        $request = CreateCourseRequestMother::random();
        $course  = CourseMother::fromRequest($request);
        $this->shouldSave($course);
        
        $this->creator->__invoke($request);
    }

}
