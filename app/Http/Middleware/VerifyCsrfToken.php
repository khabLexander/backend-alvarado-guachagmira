<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://backend-alvarado-guachagmira.test/episodes',
        'http://backend-alvarado-guachagmira.test/episodes/30/characters',
        'http://backend-alvarado-guachagmira.test/episodes/30/characters/roberto+cali'
    ];
}
