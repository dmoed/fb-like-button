<?php

namespace dmoed\FbLikeButton;

use App\LikesWidget;
use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'FB Likes Button Widget';
    }

    public function initialize(): void
    {
        $this->addWidget(new LikesWidget());
    }
}