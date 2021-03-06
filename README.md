# Domain event

![stability-deprecated](https://img.shields.io/badge/stability-deprecated-red.svg)

[![Build Status](https://travis-ci.org/gbprod/domain-event.svg?branch=master)](https://travis-ci.org/gbprod/domain-event)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gbprod/domain-event/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gbprod/domain-event/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/gbprod/domain-event/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/gbprod/domain-event/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/gbprod/domain-event/v/stable)](https://packagist.org/packages/gbprod/domain-event) 
[![Total Downloads](https://poser.pugx.org/gbprod/domain-event/downloads)](https://packagist.org/packages/gbprod/domain-event) 
[![Latest Unstable Version](https://poser.pugx.org/gbprod/domain-event/v/unstable)](https://packagist.org/packages/gbprod/domain-event) 
[![License](https://poser.pugx.org/gbprod/domain-event/license)](https://packagist.org/packages/gbprod/domain-event)

Library to manage domain events in a php DDD application.

## Usage

### Create a domain event

```php
<?php

namespace GBProd\Acme\Event;

use GBProd\DomainEvent\DomainEvent;

class SomethingHappenedEvent implements DomainEvent
{
    private $id;
    
    public function __construct($id)
    {
        $this->id = $id;
    }
    
    public function getAggregateId()
    {
        return $id;
    }
}
```

### Raise your event


```php
<?php

namespace GBProd\Acme\Entity;

use GBProd\DomainEvent\EventProvider;
use GBProd\DomainEvent\EventProviderTrait;

final class MyEntity implements EventProvider
{
    use EventProviderTrait;
    
    public function doSomething()
    {
        $this->raise(
            new SomethingHappenedEvent($this->id)
        );
    }
}
```

### Dispatch events

```php
<?php

namespace GBProd\Acme\Repository;

use GBProd\DomainEvent\EventProvider;

class MyEntityRepository
{
    public function save(MyEntity $entity)
    {
        $this->persist($entity);
        
        $this->dispatcher->dispatch($entity);
    }
}
```

## Requirements

 * PHP 5.5+

## Installation

### Using composer

```bash
composer require gbprod/domain-event
```
