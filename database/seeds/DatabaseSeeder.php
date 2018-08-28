<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,5)->create();
        factory(App\Model\Region::class,10)->create();
        factory(App\Model\Country::class,50)->create();
        factory(App\Model\Level\CategoryLevel::class,10)->create();
        factory(App\Model\Level\Level::class,50)->create();
        factory(App\Model\Level\CommunicationTool::class,5)->create();
        factory(App\Model\Level\Evenement::class,5)->create();
        factory(App\Model\Level\Programme::class,5)->create();
        factory(App\Model\Level\Finance::class,5)->create();
        factory(App\Model\Level\LegalFramework::class,5)->create();
        factory(App\Model\Level\Population::class,5)->create();
    }
}
