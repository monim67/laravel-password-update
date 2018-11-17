<form role="form" method="post" action="{{route('password.update')}}">

  @include('laravel-password-update::form-includes', [
    'success_template' => 'laravel-password-update::bootstrap3.partials.success',
    'error_template'   => 'laravel-password-update::bootstrap3.partials.error',
  ])

  <div class="form-group">
    <label class="control-label">Current Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="old_password" required>
  </div>

  <div class="form-group">
    <label class="control-label">New Password</label>
    <input type="password" class="form-control" placeholder="Enter New Password" name="new_password" required>
  </div>

  <div class="form-group">
    <label class="control-label">Confirm New Password</label>
    <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm_new_password" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-key margin-r-5"></i>Update Password</button>
  </div>
</form>
