<?php

declare(strict_types=1);

namespace App;

/**
 * Class BazSender
 * @package App
 */
final class BazSender extends SenderCredentials implements CrmSenderInterface
{
    /**
     * Sends data to the Baz crm
     *
     * @param array $data
     * @return int
     */
    public function send(array $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that she is here.

        return 200;
    }
}
