<?php
namespace Magentop\Unit3Module\Block;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template;

class CustomBlock extends Template 
{
    public function getCustomDescription()
    {
        return "Hi xin chào";
    }
}