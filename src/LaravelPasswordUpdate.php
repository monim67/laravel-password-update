<?php

namespace Monim67\LaravelPasswordUpdate;


class LaravelPasswordUpdate
{
    public static function routes()
    {
        require __DIR__.'/../routes/password-routes-all.php';
    }
    public static function update_routes_only()
    {
        require __DIR__.'/../routes/password-update-routes.php';
    }
}

