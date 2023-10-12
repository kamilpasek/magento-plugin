<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Model;

use Ipresso\MagentoIntegration\Api\CustomerApiInterface;

class CustomerModel implements CustomerApiInterface
{

    public function getCustomers(): string
    {
        return json_encode([1, 2, 3]);
    }
}
