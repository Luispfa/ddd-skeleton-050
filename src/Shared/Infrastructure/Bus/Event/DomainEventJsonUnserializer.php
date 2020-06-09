<?php

declare(strict_types = 1);

namespace CodelyTv\Shared\Infrastructure\Bus\Event;


use CodelyTv\Shared\Domain\Bus\Event\DomainEvent;
use CodelyTv\Shared\Domain\Bus\Event\DomainEventUnserializer;
use CodelyTv\Shared\Domain\Utils;
use http\Exception\RuntimeException;

final class DomainEventJsonUnserializer implements DomainEventUnserializer
{
    private $mapping;

    public function __construct(DomainEventMapping $mapping)
    {
        $this->mapping = $mapping;
    }

    public function unserialize(string $domainEvent): DomainEvent
    {
        $eventData = Utils::jsonDecode($domainEvent);
        $eventName = $eventData['date']['type'];
        $eventClass= $this->mapping->for($eventName);

        if(null === $eventClass){
            throw new RuntimeException("The event <$eventName> doesn't exist or has no subscribers");
         }

        return $eventClass::fromPrimitives(
            $eventData['data']['attributes']['id'],
            $eventData['data']['attributes'],
            $eventData['data']['id'],
            $eventData['data']['occurred_on']
        );
    }
}