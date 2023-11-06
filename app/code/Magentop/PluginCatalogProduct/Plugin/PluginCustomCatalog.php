<?php 

namespace Magentop\PluginCatalogProduct\Plugin;

use Magento\Catalog\Controller\Product\View as MagentoView;
use Psr\Log\LoggerInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class PluginCustomCatalog
{
    protected $logger;
    protected $productRepository;

    public function __construct(
        LoggerInterface $logger,
        ProductRepositoryInterface $productRepository
    ) {
        $this->logger = $logger;
        $this->productRepository = $productRepository;
    }

    public function beforeExecute(MagentoView $subject)
    {
        $productId = $subject->getRequest()->getParam('id');
        $product = $this->productRepository->getById($productId);
        $this->logger->info("Product with ID $productId viewed: " . $product->getName());
    }
}
