<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
</head>
<body>
    @auth
    <form action="/UpdatePassword" method="PUT">
        @csrf
        <div>
            <label>Old Password:</label>
            <input type="password" name="OldPassword" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>New Password:</label>
            <input type="password" name="NewPassword" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
    </form>
    @endauth
</body>
</html>
