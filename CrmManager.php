<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    /**
     * Credentials for specified crm
     * @var array
     */
    private array $settings;

    /**
     * Logic of specified crm
     * @var CrmSenderInterface
     */
    private CrmSenderInterface $client;

    /**
     * CrmManager constructor which injects logic of crm
     * @param array $settings
     * @param CrmSenderInterface $client
     */
    public function __construct(array $settings, CrmSenderInterface $client)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->settings = $settings;
        $this->client = $client;
    }

    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int
    {
        $this->client->setCredentials($this->settings);

        return $this->client->send($clientEntity);
    }
}


// Client's code example:
// $crm = new BazSender();  or  $crm = new FooSender();
// $cli = new CrmManager(['user','passwd'], $crm);
// $cli->sendPerson(['a','b','c']);
