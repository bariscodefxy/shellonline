<?php

namespace shellonline;

use Psr\Log\{LoggerTrait, LoggerInterface};

class Logger implements LoggerInterface {
    use LoggerTrait;
    
    const LoggerPrefix = " > ";
    
    public function log($level, string|\Stringable $message, array $context = []): void
    {
        echo self::LoggerPrefix .  $message . \PHP_EOL;
    }
}