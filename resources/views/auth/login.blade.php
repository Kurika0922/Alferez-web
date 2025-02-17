<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
    <link rel="stylesheet" href="{{ asset('login-and-register-form/css/style.css') }}">
</head>
<body class="form-v8">
<a href="javascript:history.back()" class="back-button">Back</a>
<div class="page-content">
    <div class="form-v8-content">
        <div class="form-left">
            <img src="{{ asset('login-and-register-form/images/form-v8.jpg') }}" alt="form">
        </div>
        <div class="form-right">
            <h2>Login</h2>

            <!-- Display Errors -->
            @if (session('error'))
                <div style="color: red;">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-detail" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-row">
                    <label class="form-row-inner">
                        <input type="email" name="email" id="email" class="input-text" required>
                        <span class="label">E-Mail</span>
                        <span class="border"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label class="form-row-inner">
                        <input type="password" name="password" id="password" class="input-text" required>
                        <span class="label">Password</span>
                        <span class="border"></span>
                    </label>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="login" class="register" value="Login">
                </div>
                <div class="form-row-last">
                    <p>Don’t have an account? <a href="{{ route('register') }}">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
