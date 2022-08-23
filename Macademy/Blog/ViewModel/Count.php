<?php

namespace Macademy\Blog\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Count implements ArgumentInterface
{
    private Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function getCount(): int
    {
        return count($this->post->getList());
    }
}
