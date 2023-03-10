<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader("template");
$view = new Environment($loader);

$user = new UserClass\User("32", "Shnapdozer", "retel207@gmail.com", "sdgsgseg");
$comment = new CommentClass\Comment($user, "sdfsdfew3235");
$comments = [ $comment ];

if (!empty($_POST)) {
    if (isset($_POST['id'])) {
        $id = trim($_POST["id"]);
    }
    if (isset($_POST['username'])) {
        $username = trim($_POST["username"]);
    }
    if (isset($_POST['email'])) {
        $email = trim($_POST["email"]);
    }
    if (isset($_POST['password'])) {
        $password = trim($_POST["password"]);
    }
    if (isset($_POST['comment'])) {
        $comment = trim($_POST["comment"]);
    }

    $validator = \Symfony\Component\Validator\Validation::createValidatorBuilder()
        ->enableAnnotationMapping()
        ->addDefaultDoctrineAnnotationReader()
        ->getValidator();

    $addUser = new UserClass\User($id, $username, $email, $password);

    $errors = $validator->validate($addUser);
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error->getMessage() . '<br>';
        }
    } else {
//        $comments[] = new CommentClass\Comment($addUser, $comment);
        echo "Пользователь добавлен!";
    }
}
echo $view->render("index.twig");

foreach($comments as $key => $value)
    echo $value->getText() . '<br>';
    if($value->filterByDate(date("Y-m-d H:i:s"))) {

    }


?>