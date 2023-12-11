<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Tambahkan link CSS atau styles sesuai kebutuhan Anda -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            display: flex;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .left-section {
            flex: 1;
            overflow: hidden;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            box-sizing: border-box;
            overflow: auto;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            background-color: #3498db;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 767.98px) {
            .login-container {
                flex-direction: column;
            }

            .left-section,
            .left-section img,
            .right-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="left-section">
            <img src="{{ asset('images/1.jpg') }}" alt="Signup Image">
        </div>
        <div class="right-section">
            <div class="login-form">
                <h2>User Login</h2>

                @if(session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                @endif

                @if ($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('user.login') }}" method="post">
                    @csrf
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                    <br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                    <br>

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JS atau yang lainnya sesuai kebutuhan Anda -->
</body>
</html>
