<?php

declare(strict_types = 1);

namespace CodelyTv\Shared\Infrastructure\Bus\Event;

use CodelyTv\Shared\Domain\Bus\Event\DomainEvent;
use CodelyTv\Shared\Domain\Bus\Event\DomainEventSubscriber;
use function Lambdish\Phunctional\reduce;
use function Lambdish\Phunctional\reindex;

final class DomainEventMapping
{
    private $mapping;

    public function __construct(iterable $mapping)
    {
        $this->mapping = reduce($this->eventsExtractor(), $mapping, []);
    }

    public function for(string $name)
    {
        return $this->mapping[$name];
    }

    public function all()
    {
        return $this->mapping;
    }

    private function eventsExtractor(): callable
    {
        return static function (string $eventClass): string {
            return $eventClass::eventName();
        };
    }

    private function eventNameExtractor(): callable
    {
        return static function (DomainEvent $event): string {
            return $event::eventName();
        };
    }
}