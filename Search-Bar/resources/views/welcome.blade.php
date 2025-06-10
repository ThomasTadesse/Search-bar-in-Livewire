<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Tutorial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="navbar">
        <div class="navbar-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="search-wrapper">
            @livewire('SearchBar')
        </div>
    </div>
    
    <div class="content">
        <h1>Welcome to Our Website</h1>
        <p>This is a simple website.</p>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>
</html>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }
    
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #343a40;
        padding: 1rem 2rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-links {
        display: flex;
        gap: 20px;
    }
    
    .navbar-links a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
        padding: 5px 10px;
        border-radius: 4px;
    }
    
    .navbar-links a:hover {
        color: #17a2b8;
        background-color: rgba(255, 255, 255, 0.1);
    }
    
    .search-wrapper {
        width: 300px;
    }
    
    .content {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        text-align: center;
    }
    
    .content h1 {
        color: #343a40;
        margin-bottom: 1rem;
    }
    
    .content p {
        color: #6c757d;
        font-size: 1.1rem;
    }
</style>