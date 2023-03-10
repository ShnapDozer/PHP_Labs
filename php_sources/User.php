<?php namespace UserClass;

require __DIR__ . '/../vendor/autoload.php';

use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

class User {
    /**
     * @Assert\NotBlank(
     *     message = "Поле ID должно быть не пустым",
     * )
     */
    protected $id;

    /**
     * @Assert\Length(
     * min = 5,
     * max = 25,
     * minMessage = "Поле имя должно быть минимум - {{ limit }} символов",
     * maxMessage = "Поле имя должно быть максимум - {{ limit }} символов"
     * )
     */
    protected $name;

    /**
     * @Assert\Email(
     * message = "Поле email - невалидно",
     * )
     */
    protected $email;

    /**
     * @Assert\Length(
     * min = 5,
     * minMessage = "Поле пароль должено быть минимум - {{ limit }} символов",
     * )
     */
    protected $pass;

    protected $createDate;

    public function __construct($id, $name, $email, $pass) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->createDate = new DateTime('now');
    }

    public function getCreateDate() {
        return $this->createDate;
    }
}

?>