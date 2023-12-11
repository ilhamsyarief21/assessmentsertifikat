<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <title>Dashboard</title>
</head>
<body>
    @include('include.navbar')

    <!-- Content Container -->
    <div class="content-container">
        <div class="main-content">
            <!-- Content of the dashboard goes here -->
            <h2>Welcome to the Dashboard</h2>
            <p><a href="{{ url('/login') }}">Logout</a></p>
        </div>
    </div>
</body>
</html>
