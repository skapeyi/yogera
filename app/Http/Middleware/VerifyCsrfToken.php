<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'get_users', 'get_blogs', 'get_heroes', 'get_shames', 'get_campaigns', 'get_opinions', 'get_rights', 'get_parliament_discussions','get_siutations','ait_delivery_call_back','shortcode_message_call_back'
    ];
}
