<?php declare(strict_types=1);

namespace Chess\French\Controller\Aperture;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

class Esix implements HttpGetActionInterface
{
    private $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute(): Page
    {
        echo 'buh!';

        return $this->pageFactory->create();
    }
}
