<?php

namespace Test\Traits;

use PHPUnit\Framework\TestCase;
use App\Services\Logger;

class LoggerTest extends TestCase
{
    public function test_handle()
    {
        $logger = new Logger();
        $this->assertSame($logger->handle(), 'Logged event');
    }
}