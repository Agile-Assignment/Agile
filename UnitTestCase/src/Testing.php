<?php

namespace App;
class Testing
{
    protected $pdo;

    protected function getPdo(): \PDO
    {
        if ($this->pdo === null) {
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ];

            try {
                $this->pdo = new \PDO(
                    "mysql:host=localhost;
                    dbname=game;
                    charset=utf8mb4",
                    'root',
                    '',
                    $options
                );
            } catch (\PDOException $PDOException) {
                throw new \PDOException($PDOException->getMessage(), (int) $PDOException->getCode());
            }
        }
        return $this->pdo;
    }

    public function loginUser($username, $password)
    {
        if (empty($username) || empty($password)) {
            return false;
        } else {
            return $this->getPdo()->prepare('SELECT * FROM user WHERE Username= \'$username\' 
                                              AND Password=\'$password\'')
            ->fetchAll(\PDO::FETCH_ASSOC);
        }
    }

   
    /**

         * Fetch an array of users from the database

     *
     * @return array
     */
    public function fetchUsers(): array
    {
        return $this->getPdo()->prepare('SELECT * FROM user')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Fetch an array of user1 from the database
     *
     * @return array
     */
    public function fetchUser1(): array
    {
        return $this->getPdo()->prepare('SELECT * FROM user WHERE Username = "user1" AND Password = "p455w0rd" ')
                    ->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function validateUserIsArray()
    {
        $addUser = array( "Username" => "user1", 
        "Email" => "user@gmail.com",
        "Password" => "p455w0rd");
        if (is_array($addUser)) {
            return true;
        } else {
            return false;
        }
    }

    public function validateUserKey()
    {
        return array("Username" => "user1",
        "Email" => "user@gmail.com",
        "Password" => "p455w0rd");
    }


}
