<?php namespace CommentClass;

class Comment {
    protected $user;
    protected $text;

    public function __construct($user, $text) {
        $this->user = $user;
        $this->text = $text;
    }

    public function filterByDate($date) {
        return $this->user->getCreateDate() > $date;
    }

    public function getText() {
        return $this->text;
    }
}

?>
