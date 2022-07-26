<?php

namespace MagentoFoundamentals\Unit1StandaloneXhtmlTemplateSkeleton\Model;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    public function getData()
    {
        return [ 'list' => [
            0 =>
                [
                    'name' => 'Veronica',
                    'lastname' => 'Costello'
                ]
        ]
        ];
    }
}
