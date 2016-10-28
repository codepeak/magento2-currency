<?php

namespace Codepeak\Currency\Plugin\Magento\Framework\Locale;

/**
 * Class Format
 *
 * @package Codepeak\Currency\Plugin\Magento\Framework\Locale
 * @author  Robert Lord <robert@codepeak.se>
 */
class Format
{
    public function afterGetPriceFormat(\Magento\Framework\Locale\Format $subject, $result)
    {
        if (is_array($result)) {
            $result['precision'] = 0;
            $result['requiredPrecision'] = 0;
        }

        return $result;
    }
}
