<?php
namespace Magentop\HelloPage\Router;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

class Custom implements RouterInterface
{
    protected $actionFactory;
    public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory,
    )
    {
        $this->actionFactory = $actionFactory;
    }
    public function match(RequestInterface $request)
    {
        $identifier = trim($request->getPathInfo(), '/');
        $router = "magentop-page-view";
        if ($identifier == $router) {
            $request->setModuleName('magentop')
                    ->setControllerName('page')
                    ->setActionName('view')
                    ->setPathInfo('/magentop/page/view');
            return $this->actionFactory->create('Magento\Framework\App\Action\Forward');
        }
        return null;
    }

}