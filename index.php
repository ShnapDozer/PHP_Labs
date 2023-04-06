<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader("template");
$view = new Environment($loader);

use UserClass\User;
use CommentClass\Comment;

$user = new User("32", "Shnapdozer", "retel207@gmail.com", "sdgsgseg");
$comment = new Comment($user, "Shnapdozer comments");

$user1 = new User("12", "Rewood", "retel207@gmail.com", "sdgsgseg");
$comment1 = new Comment($user1, "Rewood comments");

$comments = [$comment, $comment1];

if (!empty($_POST)) {
    $id = $_POST["id"] ?? null;
    $username = $_POST["username"] ?? null;
    $email = $_POST["email"] ?? null;
    $password = $_POST["password"] ?? null;
    $comment = $_POST["comment"] ?? null;

    $validator = \Symfony\Component\Validator\Validation::createValidatorBuilder()
        ->enableAnnotationMapping()
        ->addDefaultDoctrineAnnotationReader()
        ->getValidator();

    $addUser = new User($id, $username, $email, $password);

    $errors = $validator->validate($addUser);
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error->getMessage() . '<br>';
        }
    } else {
        echo "Пользователь добавлен!";
    }
}
echo $view->render("index.twig");

foreach ($comments as $key => $value)
    if($value->filterByDate(new DateTime('2022-01-03'))) {
        echo $value->getText() . '<br>';
    }
