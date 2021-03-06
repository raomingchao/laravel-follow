<?php

/*
 * This file is part of the overtrue/laravel-follow
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelFollow\Test;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFollowed;

class Other extends Model
{
    use CanBeFollowed;

    protected $follow = User::class;

    protected $table = 'others';

    protected $fillable = ['name'];
}
