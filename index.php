<?php

// autoloader
require 'vendor/autoload.php';

use App\Contracts\Publisher;
use App\Contracts\Subscriber;
use App\Services\Email;
use App\Services\Logger;

class Auth implements Publisher
{
    use App\Traits\Publisher;

    public function login()
    {
        return $this->publish();
    }
}

(new Auth())
->listen(new Email())
->listen(new Logger())
->listen(new Logger())
->login();