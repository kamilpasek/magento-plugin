<?php

declare(strict_types=1);

namespace Ipresso\MagentoIntegration\Api;

interface CustomerApiInterface
{
    /**
     * @param string|null $params
     * @return string
     */
    public function getCustomers($params): string;
}
