<?php

$passwordController = '\Monim67\LaravelPasswordUpdate\Http\Controllers\PasswordController';

Route::get('/edit', $passwordController.'@edit')->name('password.edit');
Route::put('', $passwordController.'@update')->name('password.update');
