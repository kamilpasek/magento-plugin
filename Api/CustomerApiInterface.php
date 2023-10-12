<?php

declare(strict_types=1);

namespace Ipresso\MagentoIntegration\Api;

interface CustomerApiInterface
{
    /**
     * @return int[]
     */
    public function getCustomers(): array;
}
