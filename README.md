# Add comments to Eloquent Models

## Installation

You can install the package via composer:

```bash
composer require agilepixels/laravel-commentable
```

You must publish the migration with:

```bash
php artisan vendor:publish --provider="AgilePixels\Commentable\CommentableServiceProvider" --tag="migrations"
```

Migrate the `comments` table:

```bash
php artisan migrate
```

Optionally you can publish the config-file with:
```bash
php artisan vendor:publish --provider="AgilePixels\Commentable\CommentableServiceProvider" --tag="config"
```

### Using the traits

To enable the comments for a model, use the `AgilePixels\Commentable\Traits\HasComments` trait on the model.

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AgilePixels\Commentable\Traits\HasComments;

class Product extends Model
{
    use HasComments;
}
```

You can use the `AgilePixels\Commentable\Traits\AddsComments` on the author model:

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AgilePixels\Commentable\Traits\AddsComments;

class User extends Model
{
    use AddsComments;
}
```
