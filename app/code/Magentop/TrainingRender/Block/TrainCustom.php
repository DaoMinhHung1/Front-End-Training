<?php
namespace Magentop\TrainingRender\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class TrainCustom extends Template 
{
    protected $registry;
    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }
    public function getBackgroundColor()
    {
        if ($this->isProductPage()) {
            return 'orange';
        } else {
            return $this->getData('background_color');
        }
    }

    private function isProductPage()
    {
        return $this->registry->registry('current_product') instanceof \Magento\Catalog\Model\Product;
    }
}