<?php
namespace Magentop\Footer\Plugin;

class FooterPlugin          
{
    public function afterGetCopyright(\Magento\Framework\View\Element\Template $subject)
    {
        return "Customized coppyright!";
    }
}