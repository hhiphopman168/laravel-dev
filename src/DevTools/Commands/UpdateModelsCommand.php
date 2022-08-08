<?php

namespace Hhiphopman168\LaravelDev\DevTools\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Hhiphopman168\LaravelDev\DevTools\Helpers\TableHelper;

class UpdateModelsCommand extends Command
{
    protected $signature = 'update:models';
    protected $description = 'Command description';

    /**
     * @return void
     */
    public function handle(): void
    {
        foreach (TableHelper::GetTables() as $table) {
            $name = $table->getName();
            $this->line($name . ':::');
            Artisan::call("gf $name -d -f");
        }
    }
}
