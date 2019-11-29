<?php

/**
 *
 * Copyright © 2016 Zemez. All rights reserved.
 * See COPYING.txt for license details.
 *
 */

namespace Zemez\GoogleMap\Block;

use Magento\Framework\View\Element\Template\Context;
use Zemez\GoogleMap\Helper\Config\Settings;

class DataOptions extends  \Magento\Framework\View\Element\Template
{

    protected $_helper;

    public function __construct(Context $context, Settings $helper, array $data)
    {
        $this->_helper = $helper;
        $this->jsLayout = $this->getPagePluginWidget();
        parent::__construct($context, $data);
    }

    public function getPagePluginWidget()
    {
        return ['pluginPageData'=>$this->_helper->getPagesSettings()];
    }
}