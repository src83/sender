<?php

namespace App;

interface CrmSenderInterface
{
    public function send(array $data): int;
}
