<?php


namespace App\Services;


use App\Events\AssignAssociatePackage;
use App\Events\AssignSelfPackage;
use App\Events\NewPackageCreated;
use App\Events\PackageApproved;
use App\Events\PackageDeclined;
use App\Http\Controllers\User\UserController;
use App\Repositories\CoverLetterRedraftRepository;

class CoverLetterRedraftService
{

    /**
     * @var CoverLetterRedraftRepository
     */
    private $cover_letter_redraft_repository;

    /**
     * CoverLetterRedraftService constructor.
     * @param CoverLetterRedraftRepository $cover_letter_redraft_repository
     */
    public function __construct(CoverLetterRedraftRepository $cover_letter_redraft_repository)
    {
        $this->cover_letter_redraft_repository = $cover_letter_redraft_repository;
    }

    /**
     * @param array $CoverLetterRedraftData
     * @return \App\Models\CoverLetterRedraft
     */
    public function create(array  $CoverLetterRedraftData)
    {
        $cover_letter_redraft = $this->cover_letter_redraft_repository->create($CoverLetterRedraftData);
        $user_cont = New UserController();
        $user = $user_cont->getUserById($CoverLetterRedraftData["user_id"]);

        event(new NewPackageCreated($user));

        return $cover_letter_redraft;
    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function decline_assign(array  $assign_data)
    {
        $package = $this->cover_letter_redraft_repository->decline_assign($assign_data);
        $user_cont = new UserController();
        $associate = $user_cont->getUserById($assign_data["associate_id"]);

        $mail_array = array(
            'summary'=> $package->summary_of_interest,
            'name' => $package->name
        );

        event(new PackageDeclined($associate, $mail_array));

        return $package;

    }

    /**
     * @param array $assign_data
     * @return mixed
     */
    public function approve_assign(array  $assign_data)
    {
        $package = $this->cover_letter_redraft_repository->approve_assign($assign_data);
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
        $package = $this->cover_letter_redraft_repository->assign_self($assign_data);
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
        $package = $this->cover_letter_redraft_repository->assign_associate($assign_data);
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