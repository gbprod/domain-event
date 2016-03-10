<?php

namespace GBProd\DomainEvent;

/**
 * Interface for aggregates which provides events
 * 
 * @author gbprod <contact@gb-prod.fr>
 */
interface EventProvider
{
    /**
     * Raise a domain event
     * 
     * @return void
     */
    public function raise(DomainEvent $event);
    
    /**
     * Pop uncommited events
     * 
     * @return array<DomainEvent>
     */
    public function popEvents();
}