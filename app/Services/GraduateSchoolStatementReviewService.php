<?php


namespace App\Services;


use App\Events\AssignSelfPackage;
use App\Events\NewPackageCreated;
use App\Events\PackageApproved;
use App\Events\PackageDeclined;
use App\Http\Controllers\User\UserController;
use App\Repositories\GraduateSchoolStatementReviewRepository;

class GraduateSchoolStatementReviewService
{
    /**
     * @var GraduateSchoolStatementReviewRepository
     */
    private $graduate_school_statement_review_repository;

    /**
     * GraduateSchoolStatementReviewService constructor.
     * @param GraduateSchoolStatementReviewRepository $graduate_school_statement_review_repository
     */
    public function __construct(GraduateSchoolStatementReviewRepository $graduate_school_statement_review_repository)
{
    $this->graduate_school_statement_review_repository = $graduate_school_statement_review_repository;
}


    public function create(array  $assign_data)
    {
        $graduate_school_statement_review = $this->graduate_school_statement_review_repository->create($assign_data);
        $user_cont = New UserController();
        $user = $user_cont->getUserById($assign_data["user_id"]);

        event(new NewPackageCreated($user));

        return $graduate_school_statement_review;
    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function decline_assign(array  $assign_data)
    {
        $package = $this->graduate_school_statement_review_repository->assign_self($assign_data);
        $user_cont = new UserController();
        $expert = $user_cont->getUserById($assign_data["associate_id"]);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new PackageDeclined($expert, $mail_array));
        return $package;
    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function approve_assign(array  $assign_data)
    {
        $package = $this->graduate_school_statement_review_repository->assign_self($assign_data);
        $user_cont = new UserController();
        $associate = $user_cont->getUserById($assign_data["associate_id"]);
        $user = $user_cont->getUserById($package->user_id);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new PackageApproved($user,$mail_array,$associate));

        return $package;
    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function assign_self(array  $assign_data)
    {
        $package = $this->graduate_school_statement_review_repository->assign_self($assign_data);
        $user_cont = new UserController();
        $expert = $user_cont->getUserById($assign_data["associate_id"]);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new AssignSelfPackage($expert, $mail_array));
        return $package;
    }


}