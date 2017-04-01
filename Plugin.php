<?php

namespace Kanboard\Plugin\Gravatar;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->avatarManager->register(new GravatarProvider($this->container));
    }

    public function getPluginName()
    {
        return 'Gravatar';
    }

    public function getPluginDescription()
    {
        return t('Gravatar for Kanboard');
    }

    public function getPluginAuthor()
    {
        return 'Frédéric Guillot';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kanboard/plugin-gravatar';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.42';
    }
}
