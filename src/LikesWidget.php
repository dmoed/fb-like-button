<?php
declare(strict_types=1);

namespace dmoed\FbLikeButton;

use Bolt\Widget\BaseWidget;
use Bolt\Widget\Injector\RequestZone;
use Bolt\Widget\Injector\AdditionalTarget;
use Bolt\Widget\TwigAwareInterface;

class LikesWidget extends BaseWidget implements TwigAwareInterface
{
    protected $name = 'FB Likes Widget';
    protected $target = ADDITIONALTARGET::WIDGET_FRONT_FOOTER;
    protected $priority = 300;
    protected $template = '@fb-likes-widget/widget.html.twig';
    protected $zone = RequestZone::FRONTEND;
    protected $cacheDuration = 0;

    public function run(array $params = []): ?string
    {
        $details = $this->getDetails();

        if (empty($details)) {
            return null;
        }

        return parent::run([
            'options' => $details
        ]);
    }

    private function getDetails(): array
    {
        if (!$this->extension) {
            return [];
        }

        return [
            'url' => (string)$this->extension->getConfig()->get('url'),
            'layout' => (string)$this->extension->getConfig()->get('layout', 'standard'),
            'width' => (string)$this->extension->getConfig()->get('width', ''),
            'size' => (string)$this->extension->getConfig()->get('size', 'small'),
            'action' => (string)$this->extension->getConfig()->get('action', 'like'),
            'share' => (bool)$this->extension->getConfig()->get('share', false),
            'ref' => (string)$this->extension->getConfig()->get('share', ''),
            'lazy' => (bool)$this->extension->getConfig()->get('lazy', false),
            'colorscheme' => (string)$this->extension->getConfig()->get('colorscheme', ''),
            'kid_directed_site' => (bool)$this->extension->getConfig()->get('kid-directed-site', false),
        ];
    }
}