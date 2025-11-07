<form class="w-full flex space-x-2 mt-6">
  <input
    type=" text"
    class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
    placeholder="Search for books, authors, genres..."
    name="search"
    id="">
  <button type="submit">🔍</button>
</form>

<section class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
  <?php foreach ($books as $book): ?>
    <div class="rounded-lg border-stone-600 border-2 bg-stone-900">
      <div class="flex">
        <div class="w-1/3">image</div>
        <div>
          <a
            href="/book?id=<?= $book['id'] ?>"
            class="font-semibold hover:underline"><?= $book['title'] ?></a>
          <div class="text-xs italic"><?= $book['author'] ?></div>
          <div class="text-yellow-500 text-xl"><?= getRating($book); ?><span class="text-sm">(<?= $book['votes'] ?> votes)</span></div>
        </div>
      </div>
      <div class="text-sm"><?= $book['description'] ?></div>
    </div>

  <?php endforeach; ?>
</section>