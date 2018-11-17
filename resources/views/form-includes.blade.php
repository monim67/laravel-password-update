@csrf
@method('PUT')

@if (session('laravel-password-update-success'))
@include($success_template, ['success_text' => session('laravel-password-update-success')])
@endif

@if ($errors->{'laravel-password-update'}->any())
@include($error_template, ['error_messages' => $errors->{'laravel-password-update'}->all()])
@endif
