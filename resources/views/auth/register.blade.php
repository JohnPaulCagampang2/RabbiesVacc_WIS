<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | RabbiesVaccinationSystem</title>
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

  .register-container {
    background-color: #1E1E1E;
    display: flex;
    border-radius: 15px;
    overflow: hidden;
    width: 900px;
    max-width: 95%;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
  }

  .register-image {
    flex: 1;
    background: url("{{ asset('images/regis.jpg') }}") no-repeat center center;
    background-size: cover;
    filter: brightness(0.8);
  }

  .register-form {  
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
  <div class="register-container">
    <div class="register-image"></div>

    <div class="register-form">
      <div class="brand">🐾 RabbiesVaccinationSystem</div>
      <h3>Sign Up</h3>
      <p>Already a member? <a href="{{ route('login') }}">Login now</a></p>

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3 password-wrapper">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <span class="password-toggle" onclick="togglePassword('password', this)">🙈</span>
        </div>
        <div class="mb-3 password-wrapper">
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required>
          <span class="password-toggle" onclick="togglePassword('password_confirmation', this)">🙈</span>
        </div>
        <button type="submit" class="btn-signup">REGISTER</button>
      </form>
    </div>
  </div>

  <script>
    function togglePassword(inputId, toggleIcon) {
      const passwordInput = document.getElementById(inputId);
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.textContent = '🙉';
      } else {
        passwordInput.type = 'password';
        toggleIcon.textContent = '🙈';
      }
    }
  </script>
</body>
</html>