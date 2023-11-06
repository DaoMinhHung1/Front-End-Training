<?php
namespace Magentop\HelloWord\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\UrlRewrite\Model\UrlRewriteFactory;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $urlRewriteFactory;

    public function __construct(
        Context $context,
        UrlRewriteFactory $urlRewriteFactory
    ) {
        parent::__construct($context);
        $this->urlRewriteFactory = $urlRewriteFactory;
    }

    public function execute()
    {
        $urlRewrite = $this->urlRewriteFactory->create();
        $urlRewrite
            ->setEntityType('custom')
            ->setRequestPath('magentop/hello/index')
            ->setTargetPath('magentop/page/view')
            ->setRedirectType(0)
            ->setStoreId(1);
        
        try {
            $urlRewrite->save();
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('magentop/page/view');
            return $resultRedirect;
        } catch (\Exception $e) {
            $this->messageManager->addError(__('Error occurred while creating URL Rewrite.'));
        }
    }
}