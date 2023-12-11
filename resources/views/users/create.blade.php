<!-- resources/views/users/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Tambah User</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('users.store') }}" class="form">
            @csrf
            <h2>Tambah User</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <!-- Add additional fields for user creation as needed -->

            <button type="submit" class="add-button">Tambah</button>
        </form>
    </div>
</body>
</html>
