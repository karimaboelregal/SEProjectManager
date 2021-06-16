<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ID = DB::table('projecttemplate')->insertGetId([
            'templateName'=>'main project',
            'description' =>'the main for this course'
        ]);
            
        DB::table('projecttemplatecourses')->insertGetId([
            'projectTempID'=>$ID,
            'courseID' =>1
        ]);
    


        DB::table('projecttemplatesubmissions')->insertGetId([
            'projectTempID'=>$ID,
            'submissionName' =>'SRS'
        ]);

        DB::table('projecttemplatesubmissions')->insertGetId([
            'projectTempID'=>$ID,
            'submissionName' =>'SDD'
        ]);

        DB::table('project')->insertGetId([
            'ProjectTitle'=>'souq',
            'ProjectDesc' =>'testing desc',
            'ClientNumber' =>'01019245307',
            'ClientName' =>'Anas',
            'ClientEmail' =>'Anas@gmail.com',
            'TeamId' =>1,
            'ProjectTemplateId' =>$ID
        ]); 
        
    }
}
