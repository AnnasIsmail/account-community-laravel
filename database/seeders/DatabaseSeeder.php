<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Account;
use App\Models\AccountAgent;
use App\Models\AccountSkin;

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
    }
}
