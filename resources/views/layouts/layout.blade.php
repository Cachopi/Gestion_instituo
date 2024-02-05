<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield("descripcion")">
    <title>@yield("titulo")</title>
    @vite("resources/css/app.css")
</head>
<body>

<x-layout.header />

<x-layout.nav />


<main  class="bg-main h-65v p-3" >
    @yield("contenido")
</main>
<footer class="h-10v bg-footer text-white">
    footer
</footer>




</body>
</html>
