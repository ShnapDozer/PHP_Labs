<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader("template");
$view = new Environment($loader);

if (isset($_POST['id'])) {
    $id = $_POST["id"];
}
if (isset($_POST['username'])) {
    $username = $_POST["username"];
}
if (isset($_POST['email'])) {
    $email = $_POST["email"];
}
if (isset($_POST['password'])) {
    $password = $_POST["password"];
}

$validator = \Symfony\Component\Validator\Validation::createValidatorBuilder()
    ->enableAnnotationMapping()
    ->addDefaultDoctrineAnnotationReader()
    ->getValidator();

$addUser = new UserClass\User($id, $username, $email, $password);

$errors = $validator->validate($addUser);
if(count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error->getMessage().'<br>';
    }
} else {
    echo "Пользователь добавлен!";
}

echo $view->render("index.twig");
?>