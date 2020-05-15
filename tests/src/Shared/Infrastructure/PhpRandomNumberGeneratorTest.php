<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Shared\Infrastructure;

use PHPUnit\Framework\TestCase;
use CodelyTv\Shared\Infrastructure\PhpRandomNumberGenerator;

class PhpRandomNumberGeneratorTest extends TestCase
{

    /** @test */
    public function it_should_generate_a_random_number(): void
    {
        $generator = new PhpRandomNumberGenerator();
        $this->assertIsNumeric($generator->generate());
    }

}
