<?php

namespace Codepeak\Currency\Plugin\Magento\Framework\Pricing\Render;

use Magento\Framework\Pricing\PriceCurrencyInterface;

/**
 * Class Amount
 *
 * @package Codepeak\Currency\Plugin\Magento\Framework\Pricing\Render
 * @author  Robert Lord <robert@codepeak.se>
 */
class Amount
{
    /**
     * Before formatCurrency
     *
     * @param \Magento\Framework\Pricing\Render\Amount $subject
     * @param                                          $amount
     * @param bool                                     $includeContainer
     * @param int                                      $precision
     *
     * @return array
     */
    public function beforeFormatCurrency(
        \Magento\Framework\Pricing\Render\Amount $subject,
        $amount,
        $includeContainer = true,
        $precision = PriceCurrencyInterface::DEFAULT_PRECISION
    )
    {
        // Change precision
        $precision = 0;

        return [
            $amount,
            $includeContainer,
            $precision
        ];
    }
}
