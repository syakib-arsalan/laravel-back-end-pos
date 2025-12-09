<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @method('post')
                <input type="username" name="username" placeholder="Masukan Username" value="{{ old('username') }}">
                <input type="password" name="password" placeholder="Masukan Password" value="{{ old('password') }}">
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
