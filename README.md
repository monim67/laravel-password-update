# laravel-password-update

This package adds password update feature with password-update event to a fresh laravel
installation with default laravel auth. A password controller is included to handle
password update which emits an event after a successful password change. It also includes
password-update forms in Bootstrap 3 and Bootstrap 4 layouts which can be added to any
laravel project with just a single line of code.


# Getting Started

Install the package via composer.

    composer require monim67/laravel-password-update

Add the following to your routes in `web.php` file.

```php
Route::prefix('password')->group(function(){LaravelPasswordUpdate::routes();});
```

This will add 2 routes for password edit and update. You can use any prefix of your choice.

![Routes added by laravel-password-update][routes-image]

If you just want the update route, use the following instead.

```php
Route::prefix('password')->group(function(){LaravelPasswordUpdate::update_routes_only();});
```

The edit route will look for `resources\views\auth\passwords\edit.blade.php`.
So create a file extending your base layout template and include the password-update
form in it.

```html
@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-primary" >
        <div class="box-header with-border">
            <h3 class="box-title">Change Password</h3>
            <div class="box-tools pull-right">
            </div>
        </div>
        <div class="box-body">
            @include('laravel-password-update::bootstrap3.horizontal-form')
        </div>
        </div>
    </div>
</div>
@stop
```

That is all you need, the controller is shipped with the package, you don't need to
write controller actions. Run the development server and visit
`http://localhost:8000/password/edit` to see it in action.


# Other Form Layouts 

This package includes horizontal and vertical forms for Bootstrap 3 and Bootstrap 4.
You can use any of the following options. You can even use your own markup instead.

    @include('laravel-password-update::bootstrap3.horizontal-form')
    @include('laravel-password-update::bootstrap3.vertical-form')

    @include('laravel-password-update::bootstrap4.horizontal-form')
    @include('laravel-password-update::bootstrap4.vertical-form')

If you don't want a separate page to update password, you can add this form in one of
the existing pages ie the profile page or account settings page. Then include only update
route to your `web.php` and include the password-update form in the page of your choice.


# Password Update Event

When user updated the password `Monim67\LaravelPasswordUpdate\Events\PasswordUpdate` event
is emitted, you can subscribe to the event or add listeners to it, if you want to send e-mail
notifications to the user when their password updates.


[routes-image]: https://raw.githubusercontent.com/monim67/perspective-vue/master/.github/images/routes.png
