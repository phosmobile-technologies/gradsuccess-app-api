<?php


namespace App\Services;

use App\Events\AssignAssociatePackage;
use App\Events\AssignSelfPackage;
use App\Events\NewPackageCreated;
use App\Events\PackageApproved;
use App\Events\PackageDeclined;
use App\Http\Controllers\User\UserController;
use App\Repositories\CoverLetterReviewRepository;

/**
 * Class CoverLetterReviewService
 * @package App\Services
 */
class CoverLetterReviewService
{
    /**
     * @var CoverLetterReviewRepository
     */
    private $cover_letter_review_repository;

    /**
     * CoverLetterReviewService constructor.
     * @param CoverLetterReviewRepository $cover_letter_review_repository
     */
    public function  __construct(CoverLetterReviewRepository $cover_letter_review_repository)
    {
        $this->cover_letter_review_repository = $cover_letter_review_repository;


    }

    public function create(array  $cover_letter_review_data)
    {
        $cover_letter_review = $this->cover_letter_review_repository->create($cover_letter_review_data);
        $user_cont = new UserController();
        $user = $user_cont->getUserById($cover_letter_review_data["user_id"]);

        event(new NewPackageCreated($user));

        return $cover_letter_review;
    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function decline_assign(array  $assign_data)
    {
        $package = $this->cover_letter_review_repository->decline_assign($assign_data);
        $user_cont = new UserController();
        $expert = $user_cont->getUserById($assign_data["associate_id"]);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new PackageDeclined($expert, $mail_array));

        return $package;
    }

    /**`
     * @param array $assign_data
     * @return mixed
     */
    public function approve_assign(array  $assign_data)
    {
        $package = $this->cover_letter_review_repository->approve_assign($assign_data);
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
        $package = $this->cover_letter_review_repository->assign_self($assign_data);
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
        $package = $this->cover_letter_review_repository->assign_associate($assign_data);
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

