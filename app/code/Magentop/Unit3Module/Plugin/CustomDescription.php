<?php
namespace Magentop\Unit3Module\Plugin;

use Magento\Catalog\Block\Product\View\Description as DescriptionBlock;

class CustomDescription
{
    public function beforeToHtml(DescriptionBlock $descriptionBlock)
    {
        $product = $descriptionBlock->getProduct();
        $customDescription = "This is a custom description for the product.";
        $product->setDescription($customDescription);
    }
}