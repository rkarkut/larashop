<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPostRepository();
    }

    private function registerPostRepository()
    {
        $repository = 'App\Repositories\Posts\EloquentPostRepository';

        $this->app->bind('App\Repositories\Posts\PostRepositoryInterface', $repository);
    }
}

