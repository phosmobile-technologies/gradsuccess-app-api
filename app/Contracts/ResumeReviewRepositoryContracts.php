<?php


namespace App\Contracts;



use App\Models\ResumeReview;

interface ResumeReviewRepositoryContracts
{
    /**
     * @param array $ResumeReviewReviewData
     * @return ResumeReview
     */
    public function create(array $ResumeReviewReviewData): ResumeReview;

    /**
     * @param array $ResumeReviewReviewData
     * @return ResumeReview
     */
    public function decline_assign(array $ResumeReviewReviewData): ResumeReview;

    /**
     * @param array $ResumeReviewReviewData
     * @return ResumeReview
     */
    public function approve_assign(array $ResumeReviewReviewData): ResumeReview;

    /**
     * @param array $ResumeReviewReviewData
     * @return ResumeReview
     */
    public function assign_self(array $ResumeReviewReviewData): ResumeReview;

    /**
     * @param array $ResumeReviewReviewData
     * @return ResumeReview
     */
    public function assign_associate(array $ResumeReviewReviewData): ResumeReview;
}