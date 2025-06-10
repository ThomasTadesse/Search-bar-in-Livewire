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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .navbar-links {
            display: flex;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            display: block;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        
        /* Search container styling */
        .search-wrapper {
            position: relative;
            min-width: 250px;
        }
        
        .search-container {
            display: flex;
            align-items: center;
        }
        
        .search-container input[type=text] {
            padding: 6px;
            border: none;
            margin-right: 10px;
            font-size: 17px;
            width: 100%;
        }
        
        /* Important: Search results styling */
        .search-results {
            position: absolute;
            background-color: white;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 1000;
            max-height: 350px;
            overflow-y: auto;
            border: 1px solid #ddd;
        }
        
        .search-result-item:hover {
            background-color: #f8f9fa;
        }
        
        .content {
            padding: 20px;
        }
        .dropdown-menu {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
            margin-top: 5px;
        }
        .dropdown-menu .border-bottom {
            border-bottom: 1px solid #ddd;
        }
        .dropdown-menu span {
            font-weight: bold;
        }
        .dropdown-menu small {
            color: #666;
        }
    </style>