<?php

namespace AgilePixels\Commentable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{

    /**
     * The model that can be commented
     *
     * @return MorphTo
     */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * The model who writes the comment
     *
     * @return MorphTo
     */
    public function author(): MorphTo
    {
        return $this->morphTo();
    }

}
