<?php

namespace Magentop\Unit3Module\Controller\Custom;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Custom extends Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
}