<?php


namespace App\Repositories;


use App\Contracts\ResumeReviewRepositoryContracts;
use App\Models\ResumeReview;

class ResumeReviewRepository implements ResumeReviewRepositoryContracts
{
    public function create(array $cover_letter_review_data): ResumeReview
    {
        // TODO: Implement create() method.

        return ResumeReview::create($cover_letter_review_data);
    }

    /**
     * @param array $assignData
     * @return ResumeReview
     */
    public function decline_assign(array $assignData): ResumeReview
    {
        // TODO: Implement decline_assign() method.
        // TODO: Implement updatePackageStatus() method.
        $package = ResumeReview::findOrFail($assignData['id']);

        $package->status = 'New';
        $package->assigned_associate_id = null;

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return ResumeReview
     */
    public function approve_assign(array $assignData): ResumeReview
    {
        // TODO: Implement approve_assign() method.
        $package = ResumeReview::findOrFail($assignData['id']);

        $package->status = 'Assigned';

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return ResumeReview
     */
    public function assign_self(array $assignData): ResumeReview
    {
        // TODO: Implement assign_self() method.

        $package = ResumeReview::findOrFail($assignData['id']);

        $package->status = 'Pending';
        $package->assigned_associate_id = $assignData['associate_id'];

        $package->save();

        return $package;

    }

public function assign_associate(array $ResumeReviewReviewData): ResumeReview
{
    // TODO: Implement assign_associate() method.

    $package = ResumeReview::findOrFail($ResumeReviewReviewData['id']);

        $package->status = 'Assigned';
        $package->assigned_associate_id = $ResumeReviewReviewData['associate_id'];

        $package->save();

        return $package;
}
}