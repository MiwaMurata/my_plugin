<?php

namespace ContactManager;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;

/**
 * Plugin for ContactManager
 */
class Plugin extends BasePlugin
{
    public function middleware($middleware){
        return $middleware;
    }

    public function console($commands){
        return $commands;
    }

    public function bootstrap(PluginApplicationInterface $app){
        parent::bootstrap($app);
    }

    public function routes($routes){
        parent::routes($routes);
    }
}
