<?php

namespace GBProd\DomainEvent;

/**
 * Interface for domain event
 * 
 * @author gbprod <contact@gb-prod.fr>
 */
interface DomainEvent
{
    /**
     * Get the aggregate's id
     * 
     * @return mixed
     */
    public function getAggregateId();
}