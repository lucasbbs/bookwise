<?php


$search = $_REQUEST['search'] ?? '';

$books = Book::all($search);

view('index', compact('books'));
