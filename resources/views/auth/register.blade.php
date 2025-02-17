<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register Form</title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font -->
  <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="../../../login-and-register-form/css/style.css" />
</head>
<body class="form-v8">
<a href="javascript:history.back()" class="back-button">Back</a>
<div class="page-content">
  <div class="form-v8-content">
    <div class="form-left">
      <img src="{{ asset('login-and-register-form/images/form-v8.jpg') }}" alt="form">
    </div>
    <div class="form-right">
      <h2>Register</h2>

      @if ($errors->any())
          <div style="color: red;">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form class="form-detail" action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-row">
          <label class="form-row-inner" for="name">
            <input type="text" name="name" id="name_" class="input-text" required>
            <span class="label">Username</span>
            <span class="border"></span>
          </label>
        </div>
        <div class="form-row">
          <label class="form-row-inner" for="email">
            <input type="email" name="email" id="email" class="input-text" required>
            <span class="label">E-Mail</span>
            <span class="border"></span>
          </label>
        </div>
        <div class="form-row">
          <label class="form-row-inner" for="password_1">
          <input type="password" name="password" id="password" class="input-text" required>
            <span class="label">Password</span>
            <span class="border"></span>
          </label>
        </div>
        <div class="form-row">
          <label class="form-row-inner" for="password_1_confirmation">
          <input type="password" name="password_confirmation" id="password_confirmation" class="input-text" required>
            <span class="label">Confirm Password</span>
            <span class="border"></span>
          </label>
        </div>
        <div class="form-row-last">
          <input type="submit" name="register" class="register" value="Register">
        </div>
        <div class="form-row-last">
          <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
