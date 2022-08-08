<?php


namespace Hhiphopman168\LaravelDev;


use Hhiphopman168\LaravelDev\DevTools\Commands\DbCacheCommand;
use Hhiphopman168\LaravelDev\DevTools\Commands\DumpTableCommand;
use Hhiphopman168\LaravelDev\DevTools\Commands\GenFilesCommand;
use Hhiphopman168\LaravelDev\DevTools\Commands\DbBackupCommand;
use Hhiphopman168\LaravelDev\DevTools\Commands\RenameMigrationFilesCommand;
use Hhiphopman168\LaravelDev\DevTools\Commands\UpdateModelsCommand;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->commands([
            DbBackupCommand::class,
            DbCacheCommand::class,
            DumpTableCommand::class,
            GenFilesCommand::class,
            RenameMigrationFilesCommand::class,
            UpdateModelsCommand::class
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/laravel-dev/dist' => public_path('docs'),
        ]);

        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
    }
}