<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    form {
      background: #fff;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 420px;
    }
    form h2 {
      text-align: center;
      color: #333;
      font-size: 24px;
      margin-bottom: 30px;
      font-weight: 600;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: 500;
      margin-bottom: 8px;
      color: #555;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-group input:focus {
      border-color: #6a11cb;
      box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
    }
    button {
      width: 100%;
      padding: 14px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background: #6a11cb;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #2575fc;
    }
    button:active {
      transform: scale(0.98);
    }
    a {
      display: block;
      margin-top: 20px;
      text-align: center;
      font-size: 15px;
      color: #6a11cb;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    a:hover {
      color: #2575fc;
    }
  </style>
</head>
<body>
  <form action="login.php" method="POST">
    <input type="hidden" name="action" value="login">
    <h2>Login Form</h2>
    <div class="form-group">
      <label for="login-email">Email</label>
      <input type="email" id="login-email" name="email" required placeholder="Enter your email">
    </div>
    <div class="form-group">
      <label for="login-password">Password</label>
      <input type="password" id="login-password" name="password" required placeholder="Enter your password">
    </div>
    <button type="submit">Login</button>
    <a href="http://localhost:8000/index.php">Don't have an account? Register</a>
  </form>
</body>
</html>