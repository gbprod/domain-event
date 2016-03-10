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
     * Dispatch event stream
     * 
     * @return void
     */
    public function dispatch(array $events);
}