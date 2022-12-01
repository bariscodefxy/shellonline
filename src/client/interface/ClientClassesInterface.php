<?php

namespace shellonline\client\interface;

use shellonline\client\Client;

interface ClientClassesInterface {
    
    public function getClient(): Client;
    
    public function setClient(Client $client): void;
    
}