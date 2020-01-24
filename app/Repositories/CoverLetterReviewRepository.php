<?php


namespace App\Repositories;

use App\Contracts\CoverLetterReviewRepositoryContracts;
use App\Models\CoverLetterReview;

class CoverLetterReviewRepository implements CoverLetterReviewRepositoryContracts
{
    public function create(array $cover_letter_review_data): CoverLetterReview
    {
        // TODO: Implement create() method.

        return CoverLetterReview::create($cover_letter_review_data);
    }

    /**
     *
     * @param array $assignData
     * @return CoverLetterReview
     */
    public function decline_assign(array $assignData): CoverLetterReview
    {
        // TODO: Implement decline_assign() method.
        $package = CoverLetterReview::findOrFail($assignData['id']);

        $package->status = 'New';
        $package->assigned_associate_id = null;

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return CoverLetterReview
     */
    public function approve_assign(array $assignData): CoverLetterReview
    {
        // TODO: Implement approve_assign() method.

        $package = CoverLetterReview::findOrFail($assignData['id']);

        $package->status = 'Assigned';
        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return CoverLetterReview
     */
    public function assign_self(array $assignData): CoverLetterReview
    {
        // TODO: Implement assign_self() method.

        $package = CoverLetterReview::findOrFail($assignData['id']);

        $package->status = 'Pending';
        $package->assigned_associate_id = $assignData['associate_id'];

        $package->save();

        return $package;
    }
}
