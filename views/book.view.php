<?= $book['title'] ?>

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