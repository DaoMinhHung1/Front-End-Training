<?php

namespace Magentop\Unit3Module\Controller\Custom;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class TextController extends Action
{
    public function execute()
    {
        $textBlock = "Đây là nội dung của khối văn bản trong Magento 2.";
        $this->getResponse()->setBody($textBlock);
    }
}