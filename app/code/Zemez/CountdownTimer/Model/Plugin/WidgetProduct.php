<?php
/**
 * NOTICE OF LICENSE
 * This source file is subject to the General Public License (GPL 2.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/GPL-2.0
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade the module to newer
 * versions in the future.
 *
 * @copyright Zemez
 * @license http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */

namespace Zemez\CountdownTimer\Model\Plugin;

use Zemez\CountdownTimer\Helper\Data;
use Zemez\CountdownTimer\Model\Timer;

class WidgetProduct
{
    protected $_helper;

    public function __construct(
        Data $helper
    ) {
        $this->_helper = $helper;
    }

    public function aroundGetProductPriceHtml($subject, callable $proceed, $product, $type)
    {
        $returnValue = $proceed($product, $type);
        $additional = $this->_helper->getTimerHtml($product, Timer::WIDGET_LIST);
        return $returnValue . $additional;
    }
}