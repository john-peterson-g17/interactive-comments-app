<?php

namespace App\User\Infrastructure;

use Illuminate\Database\Capsule\Manager as Capsule;
use App\User\Domain\User;
use App\User\Domain\UserRepository;

class UserDatabaseRepository implements UserRepository
{
    public const TABLE_NAME = 'user';

    private Capsule $database;

    public function __construct(Capsule $database)
    {
        $this->database = $database;
    }

    public function find(int $id): User
    {
        return new User(1, "test", "test");
    }

    public function save(User $user): void
    {
        $this->database::table(self::TABLE_NAME)
            ->insert(
                [
                    "user_id" => $user->id(),
                    "first_name" => $user->firstName(),
                    "last_name" => $user->lastName()
                ]
            );
    }

    public function nextId(): int
    {
        $result = $this->database::select("SELECT nextval('user_user_id_seq')");

        return $result[0]->nextval;
    }
}
