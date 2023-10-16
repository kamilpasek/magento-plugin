<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Observer;

use Magento\Catalog\Model\Product;
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
        /** @var \Magento\Catalog\Model\Product $product */
        $product = $observer->getData('product');
        $this->logger->debug('app product', [
            'product' => get_class($product),
            'name' => $product->getName(),
            'id' => $product->getId(),
            'price' => $product->getPrice(),
            'category' => $product->getCategory(),
        ]);
    }
}
