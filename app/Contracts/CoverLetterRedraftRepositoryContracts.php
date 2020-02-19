<?php


namespace App\Contracts;


use App\Models\CoverLetterRedraft;

interface CoverLetterRedraftRepositoryContracts
{
    /**
     * @param array $CoverLetterReviewData
     * @return CoverLetterRedraft
     */
    public function create(array $CoverLetterReviewData): CoverLetterRedraft;

    /**
     *
     * @param array $CoverLetterReviewData
     * @return CoverLetterRedraft
     */
    public function decline_assign(array $CoverLetterReviewData): CoverLetterRedraft;

    /**
     * @param array $CoverLetterReviewData
     * @return CoverLetterRedraft
     */
    public function approve_assign(array $CoverLetterReviewData): CoverLetterRedraft;

    /**
     * @param array $CoverLetterReviewData
     * @return CoverLetterRedraft
     */
    public function assign_self(array $CoverLetterReviewData): CoverLetterRedraft;

    /**
     * @param array $CoverLetterReviewData
     * @return CoverLetterRedraft
     */
    public function assign_associate(array $CoverLetterReviewData): CoverLetterRedraft;
}