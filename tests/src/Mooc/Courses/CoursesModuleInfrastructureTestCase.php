<?php

declare(strict_types = 1);

namespace CodelyTv\Tests\Mooc\Courses;

use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Infrastructure\Persistence\DoctrineCourseRepository;
use CodelyTv\Tests\Mooc\Shared\Infrastructure\PhpUnit\MoocContextInfrastructureTestCase;
use Doctrine\ORM\EntityManager;

abstract class CoursesModuleInfrastructureTestCase extends MoocContextInfrastructureTestCase
{
}