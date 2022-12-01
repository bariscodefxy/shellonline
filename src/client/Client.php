<?php

namespace shellonline\client;

use Psr\Log\LoggerInterface;
use shellonline\Logger;
use shellonline\client\network\Network;

class Client {
    
    /** @var Logger **/
    private $logger;
    
    /** @var Network **/
    private $network;
    
    public function __construct()
    {
        $this->logger = new Logger();
        $this->network = new Network($this);
    }
    
    public function run(): void
    {
        $this->getLogger()->info("Welcome to Shell Online!");
        
        $this->getLogger()->info("Connecting to the Shell Online servers.");
        $this->getNetwork()->connect();
    }
    
    public function quit(string|\Stringable $message = ""): void
    {
        if($message) $this->getLogger()->info($message);
        
        exit(0);
    }
    
    public function getLogger(): Logger
    {
        return $this->logger;
    }
    
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
    
    public function getNetwork(): Network
    {
        return $this->network;
    }
    
    public function setNetwork(Network $network): void
    {
        $this->network = $network;
    }
    
}