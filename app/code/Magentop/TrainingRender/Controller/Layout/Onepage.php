<?php

namespace Magentop\TrainingRender\Controller\Layout;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Onepage extends Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
}