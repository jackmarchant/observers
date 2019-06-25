<?php

namespace Test\Traits;

use PHPUnit\Framework\TestCase;
use App\Services\Email;

class EmailTest extends TestCase
{
    public function test_handle()
    {
        $email = new Email();
        $this->assertSame($email->handle(), 'Email sent');
    }
}