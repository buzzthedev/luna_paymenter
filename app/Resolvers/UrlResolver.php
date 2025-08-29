<?php

namespace App\Resolvers;

use OwenIt\Auditing\Contracts\Resolver;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class UrlResolver implements Resolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve(Auditable $auditable): string
    {
        if (App::runningInConsole()) {
            return 'console';
        }

        // Just the full URL without query strings
        return Request::livewireUrl();
    }
}
