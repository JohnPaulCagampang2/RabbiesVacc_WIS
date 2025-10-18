<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | PURE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e6613e;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: white;
      display: flex;
      border-radius: 15px;
      overflow: hidden;
      width: 900px;
      max-width: 95%;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    .login-image {
      flex: 1;
      background: url("{{ asset('images/log.jpg') }}") no-repeat center center;
      background-size: cover;
    }

    .login-form {
      flex: 1;
      padding: 50px 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .brand {
      color: #e6613e;
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .login-form h3 {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .login-form p {
      margin-bottom: 30px;
    }

    .btn-login {
      background-color: #e6613e;
      border: none;
      width: 100%;
      color: white;
      padding: 10px;
      border-radius: 25px;
      font-weight: 600;
      margin-top: 15px;
    }

    .form-check-label {
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .login-container {
        flex-direction: column;
      }

      .login-image {
        height: 250px;
      }

      .login-form {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-image"></div>

    <div class="login-form">
      <div class="brand">PURE</div>
      <h3>Log in</h3>
      <p>Not a member yet? <a href="{{ route('register') }}">Register now</a></p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email or Username" required>
        </div>

        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Keep me logged in</label>
          </div>
          <a href="#">Forgot your password?</a>
        </div>

        <button type="submit" class="btn-login">LOGIN</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
