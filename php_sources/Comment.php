<?php namespace CommentClass;

class Comment {
    public function __construct(protected User $user, protected string $text) 
    {
        $this->user = $user;
        $this->text = $text;
    }

    public function filterByDate(Date $date): bool
    {
        return $this->user->getCreateDate() > $date;
    }

    public function getText(): bool 
    {
        return $this->text;
    }
}

