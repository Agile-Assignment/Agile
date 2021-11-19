<?php
namespace App;

class AddRepository{
    protected $pdo;

    protected function getPdo(): \PDO{
        if ($this->pdo === null) {

            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ];

            try {
                $this->pdo = new \PDO("mysql:host=localhost;dbname=game;charset=utf8mb4", 'root', '', $options);

            } catch (\PDOException $PDOException) {

                throw new \PDOException($PDOException->getMessage(), (int) $PDOException->getCode());
            }
        }

        return $this->pdo;
    }

    /**
     * Fetch an array of games from the database
     *
     * @return array
     */
    public function fetchGames(): array
    {
        return $this->getPdo()->prepare('SELECT * FROM game')->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchAdds()
    {
    }
}
