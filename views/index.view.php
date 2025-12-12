<form class="w-full flex space-x-2 mt-6">
  <input
    type=" text"
    value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
    name="search"
    class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
    placeholder="Search for books, authors, genres..."
    name="search"
    id="">
  <button type="submit">🔍</button>
</form>

<section class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
  <?php
  foreach ($books as $book) {
    require 'partials/_book.php';
  }
  ?>
</section>