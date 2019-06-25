<?php

namespace App\Services;

use App\Contracts\Subscriber;

class Logger implements Subscriber
{
    public function handle()
    {
        return 'Logged event';
    }
}