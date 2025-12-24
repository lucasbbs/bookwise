<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {

  header("Location: " . url());

  exit();
}

$user_id = auth()->id;

$book_id = $_POST['book_id'];

$evaluation = $_POST['evaluation'];

$grade = $_POST['grade'];

$validation = Validation::validate([

  'evaluation' => ['required'],
  'grade' => ['required']

], $_POST);

if ($validation->fails()) {

  header("Location: " . url('book?id=' . $book_id));

  exit();
}

$database->query(

  query: "insert into votes (user_id, book_id, evaluation, grade)
    values ( :user_id, :book_id, :evaluation, :grade );",

  params: compact('user_id', 'book_id', 'evaluation', 'grade')

);

flash()->push('message', 'Evaluation submitted successfully!');

header("Location: " . url('book?id=' . $book_id));

exit();
