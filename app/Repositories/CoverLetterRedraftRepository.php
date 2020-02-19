<?php


namespace App\Repositories;



use App\Contracts\CoverLetterRedraftRepositoryContracts;
use App\Models\CoverLetterRedraft;

class CoverLetterRedraftRepository implements CoverLetterRedraftRepositoryContracts
{
    public function create(array $cover_letter_redraft_data): CoverLetterRedraft
    {
        // TODO: Implement create() method.

        return CoverLetterRedraft::create($cover_letter_redraft_data);
    }

    /**
     *
     * @param array $assignData
     * @return CoverLetterRedraft
     */
    public function decline_assign(array $assignData): CoverLetterRedraft
    {
        // TODO: Implement decline_assign() method.

        $package = CoverLetterRedraft::findOrFail($assignData['id']);

        $package->status = 'New';
        $package->assigned_associate_id = null;

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return CoverLetterRedraft
     */
    public function approve_assign(array $assignData): CoverLetterRedraft
    {
        // TODO: Implement approve_assign() method.

        $package = CoverLetterRedraft::findOrFail($assignData['id']);

        $package->status = 'Assigned';
        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return CoverLetterRedraft
     */
    public function assign_self(array $assignData): CoverLetterRedraft
    {
        // TODO: Implement assign_self() method.

        $package = CoverLetterRedraft::findOrFail($assignData['id']);

        $package->status = 'Pending';
        $package->assigned_associate_id = $assignData['associate_id'];

        $package->save();

        return $package;
    }



    public function assign_associate(array $CoverLetterReviewData): CoverLetterRedraft
    {
        // TODO: Implement assign_associate() method.

                $package = CoverLetterRedraft::findOrFail($CoverLetterReviewData['id']);

                $package->status = 'Assigned';
                $package->assigned_associate_id = $CoverLetterReviewData['associate_id'];

                $package->save();

                return $package;
    }

}