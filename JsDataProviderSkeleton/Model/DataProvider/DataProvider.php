<?php

namespace Unit1\JsDataProviderSkeleton\Model\DataProvider;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * getData
     *
     * @return void
     */
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
