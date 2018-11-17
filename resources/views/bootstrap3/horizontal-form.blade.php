<form class="form-horizontal" method="post" action="{{route('password.update')}}">

  @include('laravel-password-update::form-includes', [
    'success_template' => 'laravel-password-update::bootstrap3.partials.success',
    'error_template'   => 'laravel-password-update::bootstrap3.partials.error',
  ])

  <div class="form-group">
    <label class="col-sm-4 control-label">Current Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Enter Your Password" name="old_password" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-4 control-label">New Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Enter New Password" name="new_password" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-4 control-label">Confirm New Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm_new_password" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-primary"><i class="fa fa-key margin-r-5"></i>Update Password</button>
    </div>
  </div>
</form>
