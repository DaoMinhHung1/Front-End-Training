<?php
namespace Magentop\EventPage\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class LogUrlObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        // Lấy đối tượng Request
        $request = $observer->getRequest();

        // Lấy URL từ request
        $url = $request->getPathInfo();

        // Ghi URL vào log
        $this->logger->info('URL: ' . $url);
    }
}
