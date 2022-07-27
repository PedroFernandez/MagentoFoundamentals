<?php

namespace MagentoFoundamentals\Uni1SimpleComponent\Controller\adminhtml\UiComponent;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;

class Index extends Action
{
    /**
     * ACL access restriction
     */
    const ADMIN_RESOURCE = 'Unit1SimpleComponent::simple_list';

    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
