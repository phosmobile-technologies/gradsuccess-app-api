<?php

use App\Models\AssociateDetail;
use App\Models\GraduateSchoolEssayRedraft;
use App\Models\CoverLetterRedraft;
use App\Models\CoverLetterReview;
use App\Models\GraduateSchoolStatementReview;
use App\Models\Messages;
use App\Models\ResumeReview;
use App\Models\Package;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 3)->create();
        factory(CoverLetterRedraft::class, 5)->create();
        factory(GraduateSchoolEssayRedraft::class, 5)->create();
        factory(CoverLetterReview::class, 5)->create();
        factory(GraduateSchoolStatementReview::class, 5)->create();
        factory(ResumeReview::class, 5)->create();
        factory(Package::class, 5)->create();
        factory(AssociateDetail::class, 2)->create();
        factory(Messages::class, 100)->create();


       DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Gradsuccess',
            'phone' => '0909348438',
            'email' => 'admin@gradsuccess.org',
            'password' => bcrypt('Admin'),
            'account_type' => 'Admin',
        ]);
        DB::table('users')->insert([
            'first_name' => 'Associate',
            'last_name' => 'One',
            'phone' => '0909348438',
            'email' => 'expert_one@gradsuccess.org',
            'password' => bcrypt('password'),
            'account_type' => 'Associate',
        ]);
        DB::table('users')->insert([
            'first_name' => 'Associate',
            'last_name' => 'Two',
            'phone' => '0909348438',
            'email' => 'expert_two@gradsuccess.org',
            'password' => bcrypt('password'),
            'account_type' => 'Associate',
        ]);
    }
}
