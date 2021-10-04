<?php

declare(strict_types=1);

namespace App;

/**
 * Class SenderCredentials
 * @package App
 */
class SenderCredentials
{
    /**
     * Credentials for specified crm
     * @var array $settings
     */
    protected array $settings;

    /**
     * Set credentials for specified crm
     *
     * @param array $settings
     */
    public function setCredentials(array $settings): void
    {
        $this->settings = $settings;
    }
}
