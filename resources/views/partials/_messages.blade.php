@if (Session::has('success'))

  <div class="alert alert-success" role="alert">
    <b>Success:</b> {{ Session::get('success') }}
  </div>

@endif