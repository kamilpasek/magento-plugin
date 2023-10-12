<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Controller;

use Ipresso\MagentoIntegration\Api\CustomerApiInterface;

class CustomerController implements CustomerApiInterface
{

    public function getCustomers(): string
    {
        return json_encode([1, 2, 3]);
    }
}
