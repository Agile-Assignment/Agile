<?php

namespace App;

class Add
{
    private array $games;
    private AddRepository $addRepository;

    public function __construct (AddRepository $addRepository)
    {
        $this->addRepository = $addRepository;

    }


    public function setGames(){


        $this->games = $this->addRepository->fetchGames();

    }

    /**
     * @return array
     */
    public function getGames():array{
        return $this->games;
    }
}