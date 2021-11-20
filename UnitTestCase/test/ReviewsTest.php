<?php

use App\ReviewRepository;
use PHPUnit\Framework\TestCase;

class ReviewsTest extends TestCase
{
    /** @group db */

    public function test_user_reviewID_are_different(){
        $mockRepo = $this->createMock(ReviewRepository::class);

        $mockReviewsArray=[

        ['ReviewID'=>11,'GameID'=>2,
            'Names'=>'Testing',
            'Rate'=>3,
            'Message'=>'Testing',
            'TimeLine'=>'2021-10-18 22:45:28']
        ];
        $newReview=[
            ['ReviewID'=>12,'GameID'=>1,
                'Names'=>'Testing1',
                'Rate'=>4,
                'Message'=>'Testing1',
                'TimeLine'=>'2021-10-18 22:45:28']
        ];

        $mockRepo->expects($this->once())->method('fetchReviews')->willReturn($mockReviewsArray);

        $reviews = $mockRepo->fetchReviews();

        try{
            $this->assertNotEquals($newReview[0]['ReviewID'],$reviews[0]['ReviewID']);
            echo'ReviewID is not the same.';
//
        }catch (Exception $error){
            echo $error->getMessage();
            $this->fail("ReviewID is the same");


        }
    }
    public function test_user_reviews_are_different(){
        $mockRepo = $this->createMock(ReviewRepository::class);

        $mockReviewsArray=[
            ['ReviewID'=>11,'GameID'=>2,
                'Names'=>'Testing',
                'Rate'=>3,
                'Message'=>'Testing',
                'TimeLine'=>'2021-10-18 22:45:28']
        ];
        $newReview=[
            ['ReviewID'=>12,'GameID'=>1,
                'Names'=>'Testing1',
                'Rate'=>4,
                'Message'=>'Testing1',
                'TimeLine'=>'2021-10-18 22:45:28']
        ];

        $mockRepo->expects($this->once())->method('fetchReviews')->willReturn($mockReviewsArray);

        $reviews = $mockRepo->fetchReviews();

        try{
            $this->assertNotEquals($newReview[0]['Names'],$reviews[0]['Names']);
            echo "User reviews are different";



//
        }catch (Exception $error){
            echo $error->getMessage();
            $this->fail('User reviews are identical.');
        }

    }

}
