<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {

  header("Location: " . url("my-books"));

  exit();
}

if (! auth()) {

  abort(403);
}

$user_id = auth()->id;

$title = $_POST['title'];

$author = $_POST['author'];

$description = $_POST['description'];

$publication_year = $_POST['publication_year'];

$validation = Validation::validate([

  'title' => ['required', 'length:3'],
  'author' => ['required'],
  'description' => ['required'],
  'publication_year' => ['required']

], $_POST);

if ($validation->fails()) {

  header("Location: " . url("my-books"));

  exit();
}

$new_name = md5(rand());

$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

$image = "images/$new_name.$extension";

move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ .  "/../public/$image");

$database->query(
  "insert into books (title, author, description, publication_year, user_id, image)
    values (:title, :author, :description, :publication_year, :user_id, :image);",

  params: compact('title', 'author', 'description', 'publication_year', 'user_id', 'image')
);
flash()->push('mensagem', 'Book added successfully!');

header("Location: " . url("my-books"));

exit();
