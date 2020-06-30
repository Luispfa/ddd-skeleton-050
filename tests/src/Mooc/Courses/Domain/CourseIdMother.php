<?php


namespace CodelyTv\Tests\Mooc\Courses\Domain;


use CodelyTv\Mooc\Shared\Domain\Course\CourseId;
use CodelyTv\Tests\Shared\Domain\UuidMother;

class CourseIdMother
{
    public static function  create(string $value): CourseId
    {
        return new CourseId($value);
    }

    public static function random(): CourseId
    {
        return self::create(UuidMother::random());
    }
}