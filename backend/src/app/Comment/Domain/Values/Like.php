<?php

namespace App\Comment\Domain\Values;

use App\User\Domain\User;
use DateTimeInterface;

class Like
{
    private User $author;
    private DateTimeInterface $timestamp;

    public function __construct(User $author, DateTimeInterface $timestamp)
    {
        $this->author = $author;
        $this->timestamp = $timestamp;
    }

    public function author(): User
    {
        return $this->author;
    }

    public function timestamp(): DateTimeInterface
    {
        return $this->timestamp;
    }
}
