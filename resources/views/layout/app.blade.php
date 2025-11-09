<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield("styles")
</head>
<body>
    <nav class="Navbar">
            <li>Home</li>
            <li>about</li>
            <li>Contuct</li>
            <li>Services</li>
    </nav>
    <section class="mine">
            @yield("mainsection")
    </section>
    <footer>
        2025 &copy; Designed bv laravel student
    </footer>
</body>
</html>