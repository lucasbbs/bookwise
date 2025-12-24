<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];

  $password = $_POST['password'];

  $validation = Validation::validate([
    'email' => ['required', 'email'],
    'password' => ['required']
  ], $_POST);
  if ($validation->fails('login')) {
    header("Location: " . url('login'));
    exit();
  }

  $user = $database->query(
    query: " select * from users where email = :email",
    class: User::class,
    params: compact('email')

  )->fetch();

  if ($user) {

    if (! password_verify($_POST['password'], $user->password)) {

      flash()->push('validacoes_login', ['Usuário ou senha estão incorretos!']);

      header('Location: ' . url('login'));

      exit();
    }

    $_SESSION['auth'] = $user;

    flash()->push('message', "Welcome " . $user->name . "!");


    header("Location: " . url());

    exit();
  }
}

// $validations = $_SESSION['validations'] ?? [];

// if (is_object($validations) && property_exists($validations, 'validations')) {
//   $validations = $validations->validations ?? [];
// }

// if (! is_array($validations)) {
//   $validations = (array) $validations;
// }

// unset($_SESSION['validations']);

view("login");
