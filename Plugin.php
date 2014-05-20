<?php namespace Alxy\Twitter;

use System\Classes\PluginBase;

/**
 * Twitter Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Twitter',
            'description' => 'Add buttons to your website to help your visitors share content and connect on Twitter.',
            'author'      => 'Alexander Guth',
            'icon'        => 'icon-twitter'
        ];
    }

    public function registerComponents()
    {
        return [
            'Alxy\Twitter\Components\Follow' => 'follow',
            'Alxy\Twitter\Components\Tweet' => 'tweet',
            'Alxy\Twitter\Components\EmbeddedTweet' => 'embeddedTweet',
            'Alxy\Twitter\Components\EmbeddedTimeline' => 'embeddedTimeline'
        ];
    }

}
