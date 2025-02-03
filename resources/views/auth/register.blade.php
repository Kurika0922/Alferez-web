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
<a href="javascript:history.back()"  class="back-button">Back</a>
  <div class="page-content">
    <div class="form-v8-content">
      <div class="form-left">
        <img src="../../../login-and-register-form/images/form-v8.jpg" alt="form">
      </div>
      <div class="form-right">
        <h2>Register</h2>
        <form class="form-detail" action="#" method="post">
          <div class="form-row">
            <label class="form-row-inner">
              <input type="text" name="full_name_1" id="full_name_1" class="input-text" required>
              <span class="label">Username</span>
              <span class="border"></span>
            </label>
          </div>
          <div class="form-row">
            <label class="form-row-inner">
              <input type="text" name="your_email_1" id="your_email_1" class="input-text" required>
              <span class="label">E-Mail</span>
              <span class="border"></span>
            </label>
          </div>
          <div class="form-row">
            <label class="form-row-inner">
              <input type="password" name="password_1" id="password_1" class="input-text" required>
              <span class="label">Password</span>
              <span class="border"></span>
            </label>
          </div>
          <div class="form-row">
            <label class="form-row-inner">
              <input type="password" name="comfirm_password_1" id="comfirm_password_1" class="input-text" required>
              <span class="label">Confirm Password</span>
              <span class="border"></span>
            </label>
          </div>
          <div class="form-row-last">
            <input type="submit" name="register" class="register" value="Register">
          </div>
          <div class="form-row-last">
            <p>Already have an account? <a href="{{route('login')}}">Login here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
