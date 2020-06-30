<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses\Infrastructure\Persistance;

use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Infrastructure\Persistence\CoursesCounterRepository;
use CodelyTv\Tests\Mooc\Courses\CoursesModuleInfrastructureTestCase;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseIdMother;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;
use Doctrine\ORM\EntityManager;

final class DoctrineCourseRepositoryTest extends CoursesModuleInfrastructureTestCase
{

    /** @test */
    public function it_should_save_a_course(): void
    {
        $course     = CourseMother::random();
        $this->doctrineRepository()->save($course);
        $this->clearUnitOfWork();
    }

    /** @test */
    public function it_should_return_an_existing_course(): void
    {
        $course     = CourseMother::random();
        $this->doctrineRepository()->save($course);
        $this->clearUnitOfWork();
        $this->assertEquals($course, $this->repository()->search($course->id()));
    }
    
     /** @test */
    public function it_should_not_return_a_non_existing_course(): void
    {
       $this->assertNull($this->doctrineRepository()->search(CourseIdMother::random()));
    }

    private function doctrineRepository(): CourseRepository
    {
        return new CoursesCounterRepository($this->service(EntityManager::class));
    }

    public function clearUnitOfWork(): void
    {
        $this->service(EntityManager::class)->clear();
    }
}
