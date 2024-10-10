<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #218838;
        }
        .error-message {
            color: red;
            font-size: 0.875em;
            margin-top: -10px;
            margin-bottom: 15px;
        }
        p {
            text-align: center;
        }
        p a {
            color: #007bff;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
        .forgot-password-link {
            text-align: center;
            margin-top: 10px;
        }
    </style> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>

    <div class="pageContainer">
        <div class="loginForm">
            <div class="loginBox">
                <div class="signIn">
                    <h2>Sign in</h2>
                </div>
                <div class="enterDetails">
                    <h3>please enter your details below</h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit">Sign in</button>
                </form>
                <div class="forgot-password-link">
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>

        </div>
        <div class="imageContainer">
            <img src="/Image/loginIMG.png" alt="">
        </div>
    </div>


</body>

</html>
