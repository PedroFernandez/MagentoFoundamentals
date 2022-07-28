<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\ConfigurableProducts\Ui\Component\Listing;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Options
 * @package Unit2\ConfigurableProducts\Ui\Component\Listing
 */
class Options implements OptionSourceInterface
{
    const ATTR_OPTIONS = [
        ['label' => 'Default', 'value' => ''],
        ['label' => 'Kobe',     'value' => 'Briant'],
        ['label' => 'Luka',     'value' => 'Doncic'],
        ['label' => 'Derrick',     'value' => 'Rose']
    ];

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return self::ATTR_OPTIONS;
    }
}
