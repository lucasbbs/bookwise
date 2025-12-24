<?php

if (! auth()) {

  header('Location: ' . url());

  exit();
}

$books = Book::my(auth()->id);

view('my-books', compact('books'));
