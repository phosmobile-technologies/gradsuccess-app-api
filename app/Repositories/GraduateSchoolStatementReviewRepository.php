<?php


namespace App\Repositories;


use App\Contracts\GraduateSchoolStatementReviewRepositoryContracts;
use App\Models\GraduateSchoolStatementReview;

class GraduateSchoolStatementReviewRepository implements GraduateSchoolStatementReviewRepositoryContracts
{
    public function create(array $graduate_school_statement_review): GraduateSchoolStatementReview
    {
        // TODO: Implement create() method.

        return GraduateSchoolStatementReview::create($graduate_school_statement_review);
    }

    /**
     * @param array $assignData
     * @return GraduateSchoolStatementReview
     */
    public function decline_assign(array $assignData): GraduateSchoolStatementReview
    {
        // TODO: Implement decline_assign() method.
        $package = GraduateSchoolStatementReview::findOrFail($assignData['id']);

        $package->status = 'Pending';
        $package->assigned_associate_id = $assignData['associate_id'];

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return GraduateSchoolStatementReview
     */
    public function approve_assign(array $assignData): GraduateSchoolStatementReview
    {
        // TODO: Implement approve_assign() method.
        $package = GraduateSchoolStatementReview::findOrFail($assignData['id']);

        $package->status = 'Assigned';

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return GraduateSchoolStatementReview
     */
    public function assign_self(array $assignData): GraduateSchoolStatementReview
    {
        // TODO: Implement assign_associate() method.

        $package = GraduateSchoolStatementReview::findOrFail($assignData['id']);

        $package->status = 'Pending';
        $package->assigned_associate_id = $assignData['associate_id'];

        $package->save();

        return $package;
    }


public function assign_associate(array $GraduateSchoolStatementReviewData): GraduateSchoolStatementReview
{
    // TODO: Implement assign_associate() method.

    $package = GraduateSchoolStatementReview::findOrFail($GraduateSchoolStatementReviewData['id']);

        $package->status = 'Assigned';
        $package->assigned_associate_id = $GraduateSchoolStatementReviewData['associate_id'];

        $package->save();

        return $package;
}
}