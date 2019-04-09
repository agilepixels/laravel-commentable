<?php

namespace AgilePixels\Commentable\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait AddsComments
{

    public function commentModel(): string
    {
        return config('commentable.model');
    }

    public function addedComments(): MorphMany
    {
        return $this->morphMany($this->commentModel(), 'author');
    }

}
