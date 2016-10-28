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
    /**
     * Adjust data sent by getPriceFormat function
     * This will remove the requirements for decumals in frontend on product page.
     *
     * @param \Magento\Framework\Locale\Format $subject
     * @param                                  $result
     *
     * @return array
     */
    public function afterGetPriceFormat(\Magento\Framework\Locale\Format $subject, $result)
    {
        if (is_array($result)) {
            $result['precision'] = 0;
            $result['requiredPrecision'] = 0;
        }

        return $result;
    }
}
