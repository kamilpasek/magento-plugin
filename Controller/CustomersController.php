<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Controller;

use Magento\Authorization\Model\UserContextInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Exception\AuthorizationException;

class CustomersController implements ActionInterface,
    HttpGetActionInterface {
    private UserContextInterface $userContext;

    public function construct(UserContextInterface $userContext) {
        $this->userContext = $userContext;
    }


    public function execute() {
        if ($this->userContext->getUserType() != UserContextInterface::USER_TYPE_INTEGRATION || !$this->userContext->getUserId()) {
            throw new AuthorizationException(__('Please log in'));
        }
        // code

    }

}
