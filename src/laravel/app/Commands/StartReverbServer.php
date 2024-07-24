<?php

namespace App\Commands;

use Laravel\Reverb\Servers\Reverb\Console\Commands\StartServer as BaseStartServer;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'reverb:custom-start')]
class StartReverbServer extends BaseStartServer
{
    protected $signature = 'reverb:custom-start
                {--host= : The IP address the server should bind to}
                {--port= : The port the server should listen on}
                {--hostname= : The hostname the server is accessible from}
                {--debug : Indicates whether debug messages should be displayed in the terminal}';
    // Определение константы SIGINT, если она еще не определена
    public function __construct()
    {
        parent::__construct();

        if (! windows_os()) { 
            if (!defined('SIGINT')) {
                define('SIGINT', 2);
            }
            if (!defined('SIGTERM')) {
                define('SIGTERM', 15);
            }
            if (!defined('SIGTSTP')) {
                define('SIGTSTP', 20);
            }
        }
    }
}
