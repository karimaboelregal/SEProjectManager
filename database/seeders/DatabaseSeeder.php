<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(surveySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(InviteSeeder::class);
        $this->call(courses_taken::class);
        $this->call(ProjectTemplateSeeder::class);
    }
}
