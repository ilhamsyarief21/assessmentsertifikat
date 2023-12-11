<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ url('/signup') }}" class="form">
            @csrf
            <h2>Signup</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Umur:</label>
            <input type="text" name="age" id="age" required>

                        
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>


            <!-- Add additional fields for signup as needed -->

            <button type="submit">Signup</button>
            <p>Belum punya akun? <a href="{{ url('/login') }}">Login</a></p>
        </form>
    </div>
</body>
</html>
