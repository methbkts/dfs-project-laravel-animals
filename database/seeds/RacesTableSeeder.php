<?php

use App\Race;
use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $race = new Race;
        $race->name = 'dog';
        $race->class = 'Mammal';
        $race->life = 13;
        $race->save();

        $race = new Race;
        $race->name = 'horse';
        $race->class = 'Mammal';
        $race->life = 30;
        $race->save();

        $race = new Race;
        $race->name = 'cat';
        $race->class = 'Mammal';
        $race->life = 16;
        $race->save();

        $race = new Race;
        $race->name = 'snake';
        $race->class = 'Reptilia';
        $race->life = 9;
        $race->save();

        $race = new Race;
        $race->name = 'panda';
        $race->class = 'Mammal';
        $race->life = 20;
        $race->save();
    }
}
