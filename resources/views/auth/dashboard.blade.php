<!-- resources/views/auth/dashboard.blade.php -->

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
           
            
            <!-- Display Total Users in a Table -->
            <div class="total-users">
                <h3>List User : {{ $totalUsers }}</h3>
                @if ($totalUsers > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No users found.</p>
                @endif
            </div>
            <div class="new-table">
                <div class="table-header">
                    <h3>New Table</h3>
                    <button class="add-button">Tambah</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Nickname</th>
                            <th>Employee</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Table on the Right -->
        
    </div>
    
</body>
</html>
