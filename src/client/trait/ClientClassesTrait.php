<?php

namespace shellonline\client\trait;

use shellonline\client\Client;

trait ClientClassesTrait {
    
    public function getClient(): Client
    {
        return $this->client;
    }
    
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }
    
}