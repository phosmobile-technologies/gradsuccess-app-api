<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'package_name','turn_around_time','amount'
    ];
    public function cover_letter_reviews()
    {
        return $this->belongsTo(CoverLetterReview::class);
    }
    public function graduate_school_essay_redrafts()
    {
        return $this->belongsTo(GraduateSchoolEssayRedraft::class);
    }
    public function graduate_school_statement_review()
    {
        return $this->belongsTo(GraduateSchoolStatementReview::class);
    }
    public function resume_reviews()
    {
        return $this->belongsTo(ResumeReview::class);
    }
}
