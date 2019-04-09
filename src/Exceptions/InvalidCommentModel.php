<?php

namespace AgilePixels\Commentable\Exceptions;

use Exception;

class InvalidCommentModel extends Exception
{

    public static function create(string $model): self
    {
        return new self("The model `{$model}` is invalid. A valid model must extend the model \AgilePixels\Commentable\Comment.");
    }

}