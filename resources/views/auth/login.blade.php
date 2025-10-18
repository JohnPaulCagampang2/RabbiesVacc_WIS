<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | RabbiesVaccinationSystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #E0E0E0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #1E1E1E;
      display: flex;
      border-radius: 15px;
      overflow: hidden;
      width: 900px;
      max-width: 95%;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
    }

    .login-image {
      flex: 1;
      background: url("{{ asset('images/log.jpg') }}") no-repeat center center;
      background-size: cover;
      filter: brightness(0.8);
    }

    .login-form {
      flex: 1;
      padding: 50px 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .brand {
      color: #E6613E;
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    a {
      color: #E6613E;
      text-decoration: none;
    }

    a:hover {
      color: #FF7B50;
    }

    .btn-signup {
      background-color: #E6613E;
      border: none;
      width: 100%;
      color: white;
      padding: 10px;
      border-radius: 25px;
      font-weight: 600;
      margin-top: 15px;
    }

    .btn-signup:hover {
      background-color: #FF7B50;
    }

    input.form-control {
      background-color: #2A2A2A;
      border: 1px solid #333;
      color: #E0E0E0;
    }

    input.form-control:focus {
      border-color: #E6613E;
      box-shadow: none;
      background-color: #2A2A2A;
      color: #fff;
    }

    input::placeholder {
      color: #ffffff !important;
      opacity: 0.9 !important;
      font-weight: 500;
    }

    input::-webkit-input-placeholder {
      color: #ffffff !important;
      opacity: 0.9 !important;
      font-weight: 500;
    }

    input::-moz-placeholder {
      color: #ffffff !important;
      opacity: 0.9 !important;
      font-weight: 500;
    }

    input:-ms-input-placeholder {
      color: #ffffff !important;
      opacity: 0.9 !important;
      font-weight: 500;
    }

    input:-moz-placeholder {
      color: #ffffff !important;
      opacity: 0.9 !important;
      font-weight: 500;
    }

    .password-wrapper {
      position: relative;
    }

    .password-toggle {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #E0E0E0;
      user-select: none;
      font-size: 0.9rem;
    }

    .password-toggle:hover {
      color: #E6613E;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-image"></div>

    <div class="login-form">
      <div class="brand">🐾 RabbiesVaccinationSystem</div>
      <h3>Log in</h3>
      <p>Not a member yet? <a href="{{ route('register') }}">Register now</a></p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email or Username" required>
        </div>
        <div class="mb-3 password-wrapper">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <span class="password-toggle" onclick="togglePassword()">🙉</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Keep me logged in</label>
          </div>
          <a href="#">Forgot your password?</a>
        </div>
        <button type="submit" class="btn-signup">LOG IN</button>
      </form>
    </div>
  </div>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const toggleIcon = document.querySelector('.password-toggle');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.textContent = '🙈';
      } else {
        passwordInput.type = 'password';
        toggleIcon.textContent = '🙉';
      }
    }
  </script>
</body>
</html>