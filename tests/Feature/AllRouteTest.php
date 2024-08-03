<?php

declare(strict_types=1);

use App\Models\User;
use function Spatie\RouteTesting\routeTesting;

routeTesting('all routes')
    ->bind('user', fn () => User::factory()->create())
    ->assertOk();
