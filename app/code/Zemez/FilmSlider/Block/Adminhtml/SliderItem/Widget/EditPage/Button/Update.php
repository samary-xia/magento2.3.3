<?php

/**
 *
 * Copyright © 2019 Zemez. All rights reserved.
 * See COPYING.txt for license details.
 *
 */

namespace Zemez\FilmSlider\Block\Adminhtml\SliderItem\Widget\EditPage\Button;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Update extends Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Context $context
     * @param array $data
     */
    public function __construct(Context $context, array $data = [])
    {
        $this->_storeManager = $context->getStoreManager();
        $this->jsLayout = $this->getImageBasePath();
        parent::__construct($context, $data);
    }

    protected function getImageBasePath()
    {
        return [
            'basePathWysiwygImage'=>
                $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA)
        ];
    }
}
