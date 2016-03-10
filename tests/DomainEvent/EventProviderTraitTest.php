<?php

namespace Tests\GBProd\DomainEvent;

use GBProd\DomainEvent\DomainEvent;
use GBProd\DomainEvent\EventProviderTrait;

/**
 * Tests for EventProviderTrait
 * 
 * @author gbprod <contact@gb-prod.fr>
 */
class EventProviderTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testPopEventsReturnsEmptyArrayIfNoEventRaised()
    {
        $provider = $this->getMockForTrait(EventProviderTrait::class);
        
        $this->assertEquals(
            [],
            $provider->popEvents()
        );
    }
    
    public function testPopEventsReturnsArrayWithRaisedEvents()
    {
        $provider = $this->getMockForTrait(EventProviderTrait::class);
        
        $event1 = $this->getMock(DomainEvent::class);
        $event2 = $this->getMock(DomainEvent::class);
        $event3 = $this->getMock(DomainEvent::class);
        
        $provider->raise($event1);
        $provider->raise($event2);
        $provider->raise($event3);
        
        $this->assertEquals(
            [$event1, $event2, $event3],
            $provider->popEvents()
        );
    }
}