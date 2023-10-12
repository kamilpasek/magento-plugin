<?php

declare(strict_types=1);

namespace Ipresso\MagentoIntegration\Api;

interface CustomerApiInterface
{
    /**
     * @return string
     */
    public function getCustomers(): string;
}
