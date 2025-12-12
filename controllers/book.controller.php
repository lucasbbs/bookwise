<?php

$book =  Book::get($_GET['id']);

$votes = $database

    ->query("select * from votes where book_id = :id", Vote::class, ['id' => $_GET['id']])

    ->fetchAll();

view('book', compact('book', 'votes'));
