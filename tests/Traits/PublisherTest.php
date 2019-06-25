<?php

namespace Test\Traits;

use PHPUnit\Framework\TestCase;

use App\Traits\Publisher;
use App\Contracts\Subscriber;

class ExampleSubscriber implements Subscriber
{
    public function handle()
    {
        return true;
    }
}

class PublisherTest extends TestCase
{
    use Publisher;

    public function test_listen()
    {
        $subscriber = $this->prophesize(ExampleSubscriber::class);
        $subscriber->handle()->shouldBeCalled();
        
        $this->listen($subscriber->reveal())->publish();
    }

    public function test_unlisten()
    {
        $subscriber = $this->prophesize(ExampleSubscriber::class);
        $subscriber->handle()->shouldNotBeCalled();
        
        $this->listen($subscriber->reveal());

        $this->unlisten(0);

        $this->publish();
    }
}