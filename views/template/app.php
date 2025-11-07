<?php

require_once './data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-stone-950 text-stone-200">
  <header class="bg-stone-900 border-b-stone-800 border-b-2 shadow-b-lg shadow-white">
    <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
      <div class="font-bold text-xl tracking-wide">Book Wise</div>
      <ul class="flex space-x-4 font-bold">
        <li><a href="/" class="text-lime-500">Explore</a></li>
        <li><a href="/my-books" class="hover:underline">My Books</a></li>
      </ul>
      <ul>
        <li><a href="/login" class="hover:underline">Login</a></li>
      </ul>
    </nav>
  </header>
  <main class="mx-auto max-w-screen-lg space-y-10">
    <?php require "./views/{$view}.view" ?>
  </main>
</body>

</html>