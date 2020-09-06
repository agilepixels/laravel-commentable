<?php

namespace AgilePixels\Commentable;

use AgilePixels\Commentable\Exceptions\InvalidCommentModel;
use Illuminate\Support\ServiceProvider;

class CommentableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @throws InvalidCommentModel
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../config/commentable.php' => config_path('commentable.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/commentable.php', 'commentable');
    }
}