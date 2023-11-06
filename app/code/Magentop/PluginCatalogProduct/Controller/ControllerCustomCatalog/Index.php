<?php 

namespace Magentop\PluginCatalogProduct\Controller\ControllerCustomCatalog;

use Magento\Catalog\Controller\Product\View as MagentoView;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index extends MagentoView
{
    protected $messageManager;

    public function execute()
    {
        $result = parent::execute();

        $message = 'Chào mừng bạn đến với trang chi tiết sản phẩm!';
        $this->messageManager->addSuccessMessage($message);
        return $result;
    }
}



