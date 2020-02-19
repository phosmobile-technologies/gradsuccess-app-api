<?php


namespace App\Contracts;


use App\Models\GraduateSchoolEssayRedraft;

interface GraduateSchoolEssayRedraftRepositoryContracts
{
    /**
     * @param array $GraduateSchoolEssayRedraftData
     * @return GraduateSchoolEssayRedraft
     */
    public function create(array $GraduateSchoolEssayRedraftData): GraduateSchoolEssayRedraft;

    /**
     * @param array $GraduateSchoolEssayRedraftData
     * @return GraduateSchoolEssayRedraft
     */
    public function decline_assign(array $GraduateSchoolEssayRedraftData): GraduateSchoolEssayRedraft;

    /**
     * @param array $GraduateSchoolEssayRedraftData
     * @return GraduateSchoolEssayRedraft
     */
    public function approve_assign(array $GraduateSchoolEssayRedraftData): GraduateSchoolEssayRedraft;

    /**
     * @param array $GraduateSchoolEssayRedraftData
     * @return GraduateSchoolEssayRedraft
     */
    public function assign_self(array $GraduateSchoolEssayRedraftData): GraduateSchoolEssayRedraft;

    /**
     * @param array $GraduateSchoolEssayRedraftData
     * @return GraduateSchoolEssayRedraft
     */
    public function assign_associate(array $GraduateSchoolEssayRedraftData): GraduateSchoolEssayRedraft;

}