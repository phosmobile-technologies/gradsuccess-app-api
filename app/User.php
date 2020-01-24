<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'password', 'account_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // users relationship to each package model

    public function cover_letter_redrafts()
    {
        return $this->hasMany(CoverLetterRedraft::class);
    }


    public function cover_letter_reviews()
    {
        return $this->hasMany(CoverLetterReview::class);
    }
    public function graduate_school_essay_redrafts()
    {
        return $this->hasMany(GraduateSchoolEssayRedraft::class);
    }
    public function graduate_school_statement_review()
    {
        return $this->hasMany(GraduateSchoolStatementReview::class);
    }
    public function resume_reviews()
    {
        return $this->hasMany(ResumeReview::class);
    }

    //delete users packages when account is deletd

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($user) {
            $user->cover_letter_redrafts()->each(function ($cover_letter_redraft) {
                $cover_letter_redraft->delete();
            });
            $user->cover_letter_reviews()->each(function ($cover_letter_review) {
                $cover_letter_review->delete();
            });
            $user->graduate_school_essay_redrafts()->each(function ($graduate_school_essay_redraft) {
                $graduate_school_essay_redraft->delete();
            });
            $user->graduate_school_statement_review()->each(function ($graduate_school_statement_review) {
                $graduate_school_statement_review->delete();
            });
            $user->resume_reviews()->each(function ($resume_review) {
                $resume_review->delete();
            });
        });
    }
}
