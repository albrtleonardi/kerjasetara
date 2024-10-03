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
    <form action="/UpdatePassword" method="POST">
        @csrf
        <div>
            <label>Old Password:</label>
            <input type="password" name="old_password" required>
            @error('old_password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>New Password:</label>
            <input type="password" name="new_password" required>
            @error('new_password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>Confirm New Password:</label>
            <input type="password" name="new_password_confirmation" required>
            @error('new_password_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Update Password</button>
    </form>
    @endauth
</body>
</html>
