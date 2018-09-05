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
        factory(App\User::class,2)->create();
        factory(App\Model\Region::class,2)->create();
        factory(App\Model\Country::class,2)->create();
        factory(App\Model\Level\CategoryLevel::class,10)->create();
        factory(App\Model\Level\Level::class,2)->create();
        $this->call(LevelSeeder::class ) ;
        factory(App\Model\Level\Population::class, 20)->create();
        factory(App\Model\Level\LegalFramework::class, 20)->create();
        factory(App\Model\Level\CommunicationTool::class,100)->create();
        factory(App\Model\Level\Finance::class,100)->create();
        factory(App\Model\Level\Evenement::class,100)->create();
        factory(App\Model\Level\Programme::class,100)->create();





//        factory(App\Model\Institution\CategoryInstitution::class,10)->create();
//        factory(App\Model\Institution\Institution::class,50)->create();
//        factory(App\Model\Person\Person::class,50)->create();
//        factory(App\Model\Person\CategoryPerson::class,10)->create();
//        factory(App\Model\Person\LevelPerson::class,50)->create();
//        factory(App\Model\Person\InstitutionPerson::class,50)->create();
//        factory(App\Model\Person\CountryPerson::class,50)->create();
//        factory(App\Model\Institution\CountryInstitution::class,50)->create();
    }
}
