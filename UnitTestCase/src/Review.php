<?php

namespace App;

class Review
{
    private array $reviews;
    private ReviewRepository $reviewRepository;

    public function __construct (ReviewRepository $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;

    }


    public function setReviews(){


        $this->reviews = $this->reviewRepository->fetchReviews();

    }

    /**
     * @return array
     */
    public function getReviews():array{
        return $this->reviews;
    }
}