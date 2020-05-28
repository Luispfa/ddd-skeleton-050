<?php

declare(strict_types = 1);

namespace CodelyTv\Mooc\Courses\Infrastructure\Persistence\Mappings;

use CodelyTv\Mooc\Courses\Domain\CourseId;
use CodelyTv\Shared\Infrastructure\Persistence\Mappings\UuidType;

final class CourseIdType extends UuidType
{
    public static function customTypeName(): string
    {
        return 'course_id';
    }

    protected function typeClassName(): string
    {
        return CourseId::class;
    }
}