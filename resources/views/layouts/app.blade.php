<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogo de libros</title>
    <style>
        body { font-family: Arial, sans-serif;
               background: #eef2f7; margin: 40px; }
        main { max-width: 900px; margin: auto; background: white;
               padding: 25px; border-radius: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #bbb; padding: 12px; }
        th { background: #dbeafe; text-align: left; }
    </style>
</head>
<body>
    <main>
        <h1>Mi catalogo de libros</h1>
        @yield('content')
    </main>
</body>
</html>