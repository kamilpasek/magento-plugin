<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Observer;

use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class AppObserver implements ObserverInterface
{
    private LoggerInterface $logger;

    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $product = $observer->getData('product');
        $this->logger->debug('app product', ['product' => print_r($product, true)]);
    }
}
