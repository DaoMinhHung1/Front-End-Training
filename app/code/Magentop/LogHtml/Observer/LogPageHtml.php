<?php
namespace Magentop\LogHtml\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPageHtml implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $response = $observer->getResponse();
        $content = $response->getBody();

        $logFile = BP . '/var/log/html.log';
     
        if (file_exists($logFile)) {
            file_put_contents($logFile, $content . "\n", FILE_APPEND);
        } else {
            file_put_contents($logFile, $content . "\n");
        }
    }
}
