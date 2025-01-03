<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      color: #fff;
    }
    .welcome-container {
      background: rgba(255, 255, 255, 0.2);
      padding: 30px 40px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }
    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    .logout-button {
      padding: 12px 24px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background: #6a11cb;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .logout-button:hover {
      background: #2575fc;
    }
    .logout-button:active {
      transform: scale(0.98);
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <h1>Welcome, User!</h1>
    <p>You have successfully logged in.</p>
    <form action="login.php" method="POST">
      <button type="submit" class="logout-button">Logout</button>
    </form>
  </div>
</body>
</html>
