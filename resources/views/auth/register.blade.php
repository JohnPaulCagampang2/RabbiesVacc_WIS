<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | PURE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e6613e;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-container {
      background-color: white;
      display: flex;
      border-radius: 15px;
      overflow: hidden;
      width: 900px;
      max-width: 95%;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    .register-image {
      flex: 1;
      background: url("{{ asset('images/log.jpg') }}") no-repeat center center;
      background-size: cover;
    }

    .register-form {
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

    .register-form h3 {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .register-form p {
      margin-bottom: 30px;
    }

    .btn-register {
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
      .register-container {
        flex-direction: column;
      }

      .register-image {
        height: 250px;
      }

      .register-form {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="register-container">
    <div class="register-image"></div>

    <div class="register-form">
      <div class="brand">PURE</div>
      <h3>Create Account</h3>
      <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full Name" required autofocus>
        </div>

        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>

        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="mb-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
        </div>

        <button type="submit" class="btn-register">REGISTER</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
