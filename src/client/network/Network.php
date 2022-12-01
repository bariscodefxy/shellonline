<?php

namespace shellonline\client\network;

use shellonline\Default;
use shellonline\client\Client;
use shellonline\client\interface\ClientClassesInterface;
use shellonline\client\trait\ClientClassesTrait;

class Network implements ClientClassesInterface {
    use ClientClassesTrait;
    
    /** @var Client **/
    private $client;
    
    /** @var \Socket **/
    private \Socket $socket;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
        
        if(!\extension_loaded('sockets'))
        {
            $this->getClient()->getLogger()->error("Unable to find sockets extension.");
            $this->getClient()->quit();
        }
        
        $this->socket = \socket_create(\AF_UNIX, \SOCK_STREAM, 0);
    }
    
    public function connect(): void
    {
        \socket_connect($this->socket, Default:SERVER_ADDRESS, Default:SERVER_PORT);
    }
    
}