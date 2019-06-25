<?php

namespace App\Services;

use App\Contracts\Subscriber;

class Email implements Subscriber
{
    public function handle()
    {
        return 'Email sent';
    }
}