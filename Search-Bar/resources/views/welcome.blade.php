<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
        </div>
    </div>
    
    <div class="content">
        <h1>Welcome to Our Website</h1>
        <p>This is a simple website.</p>
    </div>
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
        .search-container {
            display: flex;
            align-items: center;
        }
        .search-container input[type=text] {
            padding: 6px;
            border: none;
            margin-right: 10px;
            font-size: 17px;
        }
        .search-container button {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            border: none;
            cursor: pointer;
            font-size: 17px;
        }
        .search-container button:hover {
            background-color: #45a049;
        }
        .content {
            padding: 20px;
        }
    </style>