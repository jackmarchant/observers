<?php

namespace App\Contracts;

interface Publisher
{
    public function listen(Subscriber $subscriber);

    public function unlisten($index);

    public function publish();
};