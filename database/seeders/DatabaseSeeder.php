<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Account;
use App\Models\AccountAgent;
use App\Models\AccountSkin;
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
        // User::factory(10)->create();

        Account::create([
            'riotId' => 'LUHUTFORPRESIDEN',
            'tagLine' => 'NGNTT',
            'slug' => bcrypt('LUHUTFORPRESIDENNGNTT'),
            'username' => 'annas2111',
            'password' => 'Annas211112345',
            'owner' => 'Annas',
        ]);

        Account::create([
            'riotId' => 'LUHUTFORPRESIDEN',
            'tagLine' => 'DREAM',
            'slug' => bcrypt('LUHUTFORPRESIDENDREAM'),
            'username' => 'annas2110',
            'password' => 'Annas211012345',
            'owner' => 'Annas',
        ]);

        Account::create([
            'riotId' => 'JOKOWIJAGOAN',
            'tagLine' => 'MAMAH',
            'slug' => bcrypt('JOKOWIJAGOANMAMAH'),
            'username' => 'annas2109',
            'password' => 'Annas210912345',
            'owner' => 'Annas',
        ]);

        
        AccountSkin::create([
            'account_id' => 1,
            'name' => 'Xenohunter Odin',
            'uuid' => '94c085e6-48e1-c879-2552-88bf7850c5a8'
        ]);

        AccountSkin::create([
            'account_id' => 1,
            'name' => 'Glitchpop Odin',
            'uuid' => '97af88e4-4176-9fa3-4a26-57919443dab7'
        ]);

        AccountSkin::create([
            'account_id' => 1,
            'name' => 'Nitro Odin',
            'uuid' => '2715f184-46cc-bec1-dd7c-e7b4d1aeb625'
        ]);

        AccountAgent::create([
            'account_id' => 1,
            'name' => 'Fade',
            'uuid' => 'dade69b4-4f5a-8528-247b-219e5a1facd6'
        ]);

        AccountAgent::create([
            'account_id' => 1,
            'name' => 'Breach',
            'uuid' => '5f8d3a7f-467b-97f3-062c-13acf203c006'
        ]);

        AccountAgent::create([
            'account_id' => 1,
            'name' => 'Killjoy',
            'uuid' => '1e58de9c-4950-5125-93e9-a0aee9f98746'
        ]);

    }
}
