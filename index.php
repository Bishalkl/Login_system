<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    form {
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }
    form h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
      transition: border-color 0.3s ease;
    }
    .form-group input:focus {
      border-color: #6a11cb;
    }
    button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background: #6a11cb;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #2575fc;
    }
    button:active {
      transform: scale(0.98);
    }
    .login-link {
      margin-top: 15px;
      display: block;
      text-decoration: none;
      font-size: 14px;
      color: #6a11cb;
      font-weight: bold;
      text-align: center;
      transition: color 0.3s ease;
    }
    .login-link:hover {
      color: #2575fc;
    }
  </style>
</head>
<body>
  <form action="handlingData.php" method="POST">
    <input type="hidden" name="action" value="register">
    <h2>Registration Form</h2>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Register</button>
    <a href="http://localhost:8000/login.php" class="login-link">Already have an account? Login</a>
  </form>
</body>
</html>
