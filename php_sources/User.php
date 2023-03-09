<?php namespace UserClass;

require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Validator\Constraints as Assert;

class User {
    protected $id;

    /**
     * @Assert\Length(
     * min = 5,
     * max = 25,
     * minMessage = "Имя должно быть минимум - {{ limit }} символов",
     * maxMessage = "Имя должно быть максимум - {{ limit }} символов"
     * )
     */
    protected $name;

    /**
     * @Assert\Email(
     * message = "Email: '{{ value }}' невалиден",
     * )
     */
    protected $email;

    /**
     * @Assert\Length(
     * min = 5,
     * minMessage = "Пароль должен быть минимум - {{ limit }} символов",
     * )
     */
    protected $pass;

    protected $createDate;

    public function __construct($id, $name, $email, $pass) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->createDate = date("Y-m-d H:i:s");
    }

    public function getCreateDate() {
        return $this->createDate;
    }
}

?>