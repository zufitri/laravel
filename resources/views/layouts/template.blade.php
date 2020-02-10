<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/profile">profile</a>
        <a href="/kontak">kontak</a>
        <a href="/blog">blog</a>
    </nav>
    @yield("konten")
    @yield("kontak1")
    @yield("blog1")
    <footer><center>SMK ASSALAAM</center></footer>
</body>
</html>