<?php


namespace App\Services;


use App\Events\AssignAssociatePackage;
use App\Events\AssignSelfPackage;
use App\Events\NewPackageCreated;
use App\Events\PackageApproved;
use App\Events\PackageDeclined;
use App\Http\Controllers\User\UserController;
use App\Repositories\ResumeReviewRepository;

class ResumeReviewService
{
    /**
     * @var ResumeReviewRepository
     */
    private $resume_review_repository;

    /**
     * ResumeReviewService constructor.
     * @param ResumeReviewRepository $resume_review_repository
     */
    public function __construct(ResumeReviewRepository $resume_review_repository)
{

    $this->resume_review_repository = $resume_review_repository;
}

    public function create(array  $assign_data)
    {
        $resume_review = $this->resume_review_repository->create($assign_data);
        $user_cont = New UserController();
        $user = $user_cont->getUserById($assign_data["user_id"]);

        event(new NewPackageCreated($user));

        return $resume_review;
    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function decline_assign(array  $assign_data)
    {
        $package = $this->resume_review_repository->decline_assign($assign_data);
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
        $package = $this->resume_review_repository->approve_assign($assign_data);
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
        $package = $this->resume_review_repository->assign_self($assign_data);
        $user_cont = new UserController();
        $expert = $user_cont->getUserById($assign_data["associate_id"]);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new AssignSelfPackage($expert, $mail_array));
        return $package;
    }


    /**
     * @param array $assign_data
     * @return mixed
     */
    public function assign_associate(array  $assign_data)
    {
        $package = $this->resume_review_repository->assign_associate($assign_data);
        $user_cont = new UserController();
        $associate = $user_cont->getUserById($assign_data["associate_id"]);
        $user = $user_cont->getUserById($package->user_id);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new AssignAssociatePackage($user,$mail_array,$associate));
        return $package;
    }

}