<?php


namespace App\Repositories;


use App\Contracts\GraduateSchoolEssayRedraftRepositoryContracts;
use App\Models\GraduateSchoolEssayRedraft;

class GraduateSchoolEssayRedraftRepository implements GraduateSchoolEssayRedraftRepositoryContracts
{
    public function create(array $graduate_school_essay_redraft_data): GraduateSchoolEssayRedraft
    {
        // TODO: Implement create() method.

        return GraduateSchoolEssayRedraft::create($graduate_school_essay_redraft_data);
    }

    /**
     * @param array $assignData
     * @return GraduateSchoolEssayRedraft
     */
    public function decline_assign(array $assignData): GraduateSchoolEssayRedraft
    {
        // TODO: Implement decline_assign() method.
        $package = GraduateSchoolEssayRedraft::findOrFail($assignData['id']);

        $package->status = 'New';
        $package->assigned_associate_id = null;

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return GraduateSchoolEssayRedraft
     */
    public function approve_assign(array $assignData): GraduateSchoolEssayRedraft
    {
        // TODO: Implement approve_assign() method.
        $package = GraduateSchoolEssayRedraft::findOrFail($assignData['id']);

        $package->status = 'Assigned';

        $package->save();

        return $package;
    }

    /**
     * @param array $assignData
     * @return GraduateSchoolEssayRedraft
     */
    public function assign_self(array $assignData): GraduateSchoolEssayRedraft
    {
        // TODO: Implement assign_self() method.

        $package = GraduateSchoolEssayRedraft::findOrFail($assignData['id']);

        $package->status = 'Pending';
        $package->assigned_associate_id = $assignData['associate_id'];

        $package->save();

        return $package;
    }
}