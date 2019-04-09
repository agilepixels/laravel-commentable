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
        $this->publishes([
            __DIR__.'/../database/migrations/create_comments_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_comments_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../config/commentable.php' => config_path('commentable.php'),
        ], 'config');

        $this->guardAgainstInvalidCommentModel();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/commentable.php', 'commentable');
    }

    /**
     * Make sure the given Comment model extends AgilePixels\Commentable\Comment
     *
     * @throws InvalidCommentModel
     */
    public function guardAgainstInvalidCommentModel()
    {
        $modelClassName = config('commentable.model');

        if (! is_a($modelClassName, Comment::class, true)) {
            throw InvalidCommentModel::create($modelClassName);
        }
    }
}