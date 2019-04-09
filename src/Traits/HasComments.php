<?php

namespace AgilePixels\Commentable\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasComments
{

    public function commentModel(): string
    {
        return config('commentable.model');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany($this->commentModel(), 'commentable');
    }

}
