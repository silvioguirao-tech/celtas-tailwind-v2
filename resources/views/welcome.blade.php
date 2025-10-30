<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - Celtas</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
  <nav class="bg-white shadow p-4 flex gap-4">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('sobre') }}">Sobre</a>
    <a href="{{ route('servicos') }}">Serviços</a>
    <a href="{{ route('contato') }}">Contato</a>
    <a href="{{ route('blog') }}">Blog</a>
  </nav>
  <main class="p-6">
    @yield('content')
  </main>
</body>
</html>