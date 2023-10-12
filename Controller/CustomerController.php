<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Controller;

use Ipresso\MagentoIntegration\Api\CustomerApiInterface;

class CustomerController implements CustomerApiInterface
{

    public function getCustomers(): array
    {
        return [1, 2, 3];
    }
}
