<div class="alert alert-danger">
  <ul>
    @foreach ($error_messages as $message)
    <li>{{ $message }}</li>
    @endforeach
  </ul>
</div>
