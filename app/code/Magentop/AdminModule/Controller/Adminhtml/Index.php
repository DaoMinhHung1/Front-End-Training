<?php
namespace Magentop\AdminModule\Controller\Adminhtml;

use Magento\Backend\App\Action;

class MyController extends Action
{
    public function execute()
    {
        $secret = $this->getRequest()->getParam('secret');

        if ($secret !== null && $secret === 'abc') {
            echo 'Access granted!';
        } else {
            $this->_redirect('*/*/');
        }
    }
}