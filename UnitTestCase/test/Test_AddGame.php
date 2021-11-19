<?php

use App\AddRepository;
use PHPUnit\Framework\TestCase;

class Test_AddGame extends TestCase
{
    /** @group db */

    public function test_user_rating_number_are_different(){
        $mockRepo = $this->createMock(AddRepository::class);

        $mockGamesArray=[
            ['gameID'=>11,
                'Name'=>'Testing',
                'Publisher'=> 'Tung',
                'Year'=> 1999,
                'Description' => 'Its the best game',
                'Date'=>'2021-10-18 22:45:28',
                'user' => 'MunWah'
            ]
        ];

        $newGame=[

            ['gameID'=>12,
                'Name'=>'Testing1',
                'Publisher'=> 'Tung1',
                'Year'=> 2000,
                'Description' => 'Its the worst game',
                'Date'=>'2021-10-18 22:45:28',
                'user' => 'MunWah1'
            ]
        ];

        $mockRepo->expects($this->once())->method('fetchGames')->willReturn($mockGamesArray);

        $games = $mockRepo->fetchGames();

        try{
            $this->assertNotEquals($newGame[0]['gameID'],$games[0]['gameID']);
            echo'GameID number is not the same.';
//
        }catch (Exception $error){
            echo $error->getMessage();
            $this->fail("GameID is the same");


        }

    }


    public function test_user_gameID_are_different(){
        $mockRepo = $this->createMock(AddRepository::class);

        $mockGamesArray=[
            ['gameID'=>11,
                'Name'=>'Testing',
                'Publisher'=> 'Tung',
                'Year'=> 1999,
                'Description' => 'Its the best game',
                'Date'=>'2021-10-18 22:45:28',
                'user' => 'MunWah'
            ]
        ];

        $newGame=[

            ['gameID'=>12,
                'Name'=>'Testing1',
                'Publisher'=> 'Tung1',
                'Year'=> 2000,
                'Description' => 'Its the worst game',
                'Date'=>'2021-10-18 22:45:28',
                'user' => 'MunWah1'
            ]
        ];

        $mockRepo->expects($this->once())->method('fetchGames')->willReturn($mockGamesArray);

        $games = $mockRepo->fetchGames();

        try{
//           $assertValue = $mockGamesArray[0]['gameID'] && $games[0]['gameID'];
            $this->assertNotEquals($newGame[0]['gameID'],$games[0]['gameID']);
            echo "Game ID are different";



//
        }catch (Exception $error){
            echo $error->getMessage();
            $this->fail('Game ID are identical.');
        }

    }

}