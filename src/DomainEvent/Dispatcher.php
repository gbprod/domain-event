<?php

namespace GBProd\DomainEvent;

/**
 * Interface for domain event dispatcher
 * 
 * @author gbprod <contact@gb-prod.fr>
 */
interface Dispatcher
{
    /**
     * Dispatch event
     * 
     * @return void
     */
    public function dispatch(DomainEvent $events);
}