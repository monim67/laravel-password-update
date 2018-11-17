<form method="POST" action="{{route('password.update')}}">

  @include('laravel-password-update::form-includes', [
    'success_template' => 'laravel-password-update::bootstrap3.partials.success',
    'error_template'   => 'laravel-password-update::bootstrap3.partials.error',
  ])

  <div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
    <div class="col-md-6">
      <input id="password" type="password" name="old_password" placeholder="Enter Your Password" required="required" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
    <div class="col-md-6">
      <input id="password" type="password" name="new_password" placeholder="Enter New Password" required="required" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>
    <div class="col-md-6">
      <input id="password" type="password" name="confirm_new_password" placeholder="Confirm New Password" required="required" class="form-control">
    </div>
  </div>

  <div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
      <button type="submit" class="btn btn-primary"><i class="fa fa-key margin-r-5"></i> Update Password</button>
    </div>
  </div>

</form>
