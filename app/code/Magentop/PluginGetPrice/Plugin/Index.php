<?php
namespace Magentop\PluginGetPrice\Plugin;

class Index          
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $product, $result)
    {
        $newPrice = $result * 1.10;

        echo 'New Price: ' . $newPrice;
        
        return $newPrice;
    }
}