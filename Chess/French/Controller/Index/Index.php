<?php

namespace Chess\French\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\Result\RedirectFactory;

class Index implements HttpGetActionInterface
{
    private RedirectFactory $redirectFactory;

    public function __construct(RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }

    public function execute(): Redirect
    {
        $redirect = $this->redirectFactory->create();
        return $redirect->setPath('*/post/middlegame');
    }
}

