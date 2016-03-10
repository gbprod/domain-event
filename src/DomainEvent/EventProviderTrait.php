<?php

namespace GBProd\DomainEvent;

/**
 * Trait for event providers
 * 
 * @author gbprod <contact@gb-prod.fr>
 */
trait EventProviderTrait
{
    /**
     * @var array<DomainEvent>
     */
    private $events = [];
    
    /**
     * {@inheritdoc}
     */
    public function raise(DomainEvent $event)
    {
        $this->events[] = $event;
    }
    
    /**
     * {@inheritdoc}
     */
    public function popEvents()
    {
        $events = $this->events;
        $this->events = [];
        
        return $events;
    }
}