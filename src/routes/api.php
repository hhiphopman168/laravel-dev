<?php

use Hhiphopman168\LaravelDev\DevTools\Helpers\RouteHelper;
use Illuminate\Support\Facades\Route;
use Hhiphopman168\LaravelDev\DevTools\Docs\DocsController;

Route::middleware('api')->prefix('/api/docs')->name('docs.')->group(function ($router) {
    if (config('app.debug')) {
        RouteHelper::New($router, DocsController::class);
    }
});