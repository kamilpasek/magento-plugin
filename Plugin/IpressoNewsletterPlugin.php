<?php

declare(strict_types=1);


namespace Ipresso\MagentoIntegration\Plugin;

use Magento\Customer\Block\Newsletter;
use Psr\Log\LoggerInterface;

class IpressoNewsletterPlugin
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Newsletter $newsletter
     * @param $result
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetIsSubscribed(Newsletter $newsletter, $result)
    {
        $this->logger->debug('Plugin ' . $result . ' intercepted.');
    }
}
