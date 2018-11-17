<?php

$passwordController = '\Monim67\LaravelPasswordUpdate\Http\Controllers\PasswordController';

Route::put('', $passwordController.'@update')->name('password.update');
