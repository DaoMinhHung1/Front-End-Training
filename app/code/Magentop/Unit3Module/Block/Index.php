<?php

namespace Magentop\Unit3Module\Block;

use Magento\Framework\View\Element\AbstractBlock;

class Index extends AbstractBlock
{
    protected function _toHtml()
    {
        $html = '<div>Đây là nội dung khối tùy chỉnh của bạn</div>';
        return $html;
    }
}
