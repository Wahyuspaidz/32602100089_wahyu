<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("<?php echo base_url('aset/alan-walker-2019-zx-1280x800.jpg'); ?>");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        nav {
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            width: 100%;
            z-index: 999;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        nav img {
            height: 40px;
            margin-left: 20px;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        
        nav li {
            margin-right: 20px;
        }
        
        nav li a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            transition: color 0.3s;
        }
        
        nav li a:hover {
            color: #FFD700;
        }
        
        h1 {
            color: white;
            text-align: center;
            margin-top: 200px;
        }
        
        p {
            color: white;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<nav>
    <img src="<?php echo base_url('aset/logo.png'); ?>" alt="Logo">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Experience</a></li>
    </ul>
</nav>
<h1>Kelasprogrammer.com</h1>
<p>Halaman ini dibuat tanpa menggunakan background.</p>
<footer>
    <p>&copy; 2023 Kelasprogrammer.com. All rights reserved.</p>
</footer>
</body>
</html>
