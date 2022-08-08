<?php

namespace Hhiphopman168\LaravelDev\DevTools\Commands;

use Illuminate\Console\Command;
use Hhiphopman168\LaravelDev\DevTools\Helpers\TableHelper;
use Psr\SimpleCache\InvalidArgumentException;

class DbCacheCommand extends Command
{
    protected $signature = 'db:cache';
    protected $description = 'clean the db cache files';

    /**
     * @return void
     * @throws InvalidArgumentException
     */
    public function handle(): void
    {
        TableHelper::ReCache();
        $this->line('db cached...');
    }

}