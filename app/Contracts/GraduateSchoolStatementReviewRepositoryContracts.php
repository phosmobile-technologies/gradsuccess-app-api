<?php


namespace App\Contracts;


use App\Models\GraduateSchoolStatementReview;

interface GraduateSchoolStatementReviewRepositoryContracts
{
    /**
     * @param array $GraduateSchoolStatementReviewData
     * @return GraduateSchoolStatementReview
     */
    public function create(array $GraduateSchoolStatementReviewData): GraduateSchoolStatementReview;

    /**
     * @param array $GraduateSchoolStatementReviewData
     * @return GraduateSchoolStatementReview
     */
    public function decline_assign(array $GraduateSchoolStatementReviewData): GraduateSchoolStatementReview;

    /**
     * @param array $GraduateSchoolStatementReviewData
     * @return GraduateSchoolStatementReview
     */
    public function approve_assign(array $GraduateSchoolStatementReviewData): GraduateSchoolStatementReview;

    /**
     * @param array $GraduateSchoolStatementReviewData
     * @return GraduateSchoolStatementReview
     */
    public function assign_self(array $GraduateSchoolStatementReviewData): GraduateSchoolStatementReview;


}