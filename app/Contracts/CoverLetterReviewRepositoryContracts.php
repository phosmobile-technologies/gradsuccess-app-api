<?php


namespace App\Contracts;


 use App\Models\CoverLetterReview;

 interface CoverLetterReviewRepositoryContracts
{
     /**
      * Insert a Cover Letter Review Package into the database
      *
      * @param array $CoverLetterReviewData
      * @return CoverLetterReview
      */
     public function create(array $CoverLetterReviewData): CoverLetterReview;

     /**
      *
      * @param array $CoverLetterReviewData
      * @return CoverLetterReview
      */
     public function decline_assign(array $CoverLetterReviewData): CoverLetterReview;

     /**
      * @param array $CoverLetterReviewData
      * @return CoverLetterReview
      */
     public function approve_assign(array $CoverLetterReviewData): CoverLetterReview;

     /**
      * @param array $CoverLetterReviewData
      * @return CoverLetterReview
      */
     public function assign_self(array $CoverLetterReviewData): CoverLetterReview;

}