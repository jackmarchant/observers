<?php

namespace App\Traits;

use App\Contracts\Subscriber;

trait Publisher
{
    protected $subscriber;

    public function listen(Subscriber $subscriber)
    {
        $this->subscribers[] = $subscriber;
        return $this;
    }

    public function unlisten($index)
    {
        unset($this->subscribers[$index]);
    }

    public function publish()
    {
        foreach ($this->subscribers as $subscriber)
        {
            $subscriber->handle();
        }
    }
}