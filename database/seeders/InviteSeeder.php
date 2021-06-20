<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invitations')->insert([
            'Status' => '0',
            'InvitorId' => '4',
            'InvitedId' => '3',
        ]);
        DB::table('invitations')->insert([
            'Status' => '0',
            'InvitorId' => '5',
            'InvitedId' => '3',
        ]);
    }
}
