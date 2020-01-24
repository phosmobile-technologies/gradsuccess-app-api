<?php

namespace App\Providers;

use App\Repositories\CoverLetterRedraftRepository;
use App\Repositories\CoverLetterReviewRepository;
use App\Repositories\GraduateSchoolEssayRedraftRepository;
use App\Repositories\GraduateSchoolStatementReviewRepository;
use App\Repositories\Interfaces\CoverLetterRedraftRepositoryInterface;
use App\Repositories\Interfaces\CoverLetterReviewRepositoryContracts;
use App\Repositories\Interfaces\GraduateSchoolEssayRedraftRepositoryContracts;
use App\Repositories\Interfaces\GraduateSchoolStatementReviewRepositoryContracts;
use App\Repositories\Interfaces\ResumeReviewRepositoryContracts;
use App\Repositories\ResumeReviewRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
    }



    /**
     * Register our repositories with Laravel's IOC container
     *
     * @return void
     */
    private function registerRepositories() {
        $repositories = [
            CoverLetterReviewRepositoryContracts::class => CoverLetterReviewRepository::class,
            CoverLetterRedraftRepositoryInterface::class => CoverLetterRedraftRepository::class,
            GraduateSchoolEssayRedraftRepositoryContracts::class => GraduateSchoolEssayRedraftRepository::class,
            GraduateSchoolStatementReviewRepositoryContracts::class => GraduateSchoolStatementReviewRepository::class,
            ResumeReviewRepositoryContracts::class => ResumeReviewRepository::class,
        ];

        foreach($repositories as $interface => $repository) {
            $this->app->bind($interface, $repository);
        }
    }



    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
