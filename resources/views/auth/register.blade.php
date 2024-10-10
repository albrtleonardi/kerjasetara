<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <div class="pageContainer">
        <div class="registerForm">
            <div class="registerBox">
                <h2>Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label>Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label>Password:</label>
                        <input type="password" name="password" required>
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label>Confirm Password:</label>
                        <input type="password" name="password_confirmation" required>
                    </div>
                    <div>
                        @error('role')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit">Register</button>
                </form>
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </div>
        <div class="imageContainer">
            <img src="/Image/loginIMG.png" alt="Register">
        </div>
    </div>
</body>
</html>
