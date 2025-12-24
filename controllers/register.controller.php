<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $validations;

  $name = $_POST['name'];

  $email = $_POST['email'];

  $password = $_POST['password'];

  $password_confirmation = $_POST['password_confirmation'];

  $validations = Validation::validate([
    'name' => ['required'],
    'email' => ['required', 'email', 'unique:users'],
    'password' => ['required', 'length:8:30', 'strong', 'matches:password'],
  ], $_POST);

  if ($validations->fails('register')) {
    header("Location: " . url('login'));

    exit();
  }

  $user = $database->query(query: 'insert into users (name, email, password) values (:name, :email, :password)', params: [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
  ]);
  flash()->push('mensagem', 'Account created successfully, please login.');
  header('Location: ' . url('login'));
  exit();
}

header('Location: ' . url('login'));
exit();
