<?php

namespace Zemez\ThemeOptions\Plugin\Catalog\Block\Product\View\AddTo;

use \Magento\Catalog\Block\Product\View\AddTo\Compare;
use \Zemez\ThemeOptions\Helper\Data;

/**
 * Config edit plugin.
 *
 * @package Zemez\ThemeOptions\Plugin\Catalog\Block\Product\View\AddTo
 */

class ComparePlugin
{
    /**
     * ThemeOptions helper.
     *
     * @var helper
     */
    protected $_helper;

    /**
     * Construct
     *
     * @param \Zemez\ThemeOptions\Helper\Data $helper
     *
     */
    public function __construct(
        Data $helper
    ) {
        $this->_helper = $helper;
    }

    /**
     * Show/hide Compare button
     *
     * @return string
     *
     */
    public function aroundToHtml(Compare $subject, callable $proceed)
    {
        return $this->_helper->isProductShowCompare() ? $proceed() : false;
    }



}