<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Model\Level\Level;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function getIdsLevel1()
    {
        $tab = ['level_id' => null, 'country_id' => null];
        $level = Level::where('level_id', null)->get()->random();
        $tab['level_id'] = $level->id;
        $tab['country_id'] = $level->country_id;
        return $tab;
    }

    public function getIdsLevel2()
    {
        $tab = ['level_id' => null, 'country_id' => null];
        $level = Level::where('level_id', '!=' ,null)->get()->random();
        $tab['level_id'] = $level->id;
        $tab['country_id'] = $level->country_id;
        return $tab;
    }

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 6 ; $i++) {

            $tab = $this->getIdsLevel1() ;


            DB::table('levels')->insert([
                'name' => $faker->country,
                'level_id' => $tab['level_id'],
                'country_id' => $tab['country_id'],

            ]);

        }



        for ($i = 0; $i < 9; $i++) {

            $tab = $this->getIdsLevel2();


            DB::table('levels')->insert([
                'name' => $faker->country,
                'level_id' => $tab['level_id'],
                'country_id' => $tab['country_id'],

            ]);

        }



    }


}
