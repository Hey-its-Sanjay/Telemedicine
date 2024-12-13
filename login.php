<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px;
            height: auto;
        }

        .login-container h1 {
            color: #fff;
            margin-bottom: 20px;
        }

        .input-field {
            position: relative;
            margin-bottom: 20px;
        }

        .input-field input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
            background-color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #333;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-field input:focus + label,
        .input-field input:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 12px;
            color: #007BFF;
        }

        .login-container .button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container .button:hover {
            background-color: #0056b3;
        }

        .login-container a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #fff;
            margin-bottom: 20px;
        }

        .remember-me input {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="telecare.png" alt="Telecare Logo">
        </div>
        <h1>LOG IN</h1>
        <form>
            <div class="input-field">
                <input type="text" id="username" placeholder=" Username" required>
                <label for="username"></label>
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder="Password " required>
                <label for="password"></label>
            </div>
            <div class="remember-me">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button class="button" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
