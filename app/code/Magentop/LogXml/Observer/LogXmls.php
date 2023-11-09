<?php
namespace Magentop\LogXml\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogXmls implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $layout = $observer->getEvent()->getLayout();
        $xml = $layout->getUpdate()->asString();

        $logFile = BP . '/var/log/xml.log';

        if (file_exists($logFile)) {
            file_put_contents($logFile, $xml . "\n", FILE_APPEND);
        } else {
            file_put_contents($logFile, $xml . "\n");
        }
    }
}
