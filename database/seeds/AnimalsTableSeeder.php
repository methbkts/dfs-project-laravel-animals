<?php

use App\Animal;
use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animal = new Animal;
        $animal->name = 'doggy';
        $animal->description = 'Mammal';
        $animal->gender = 'male';
        $animal->age = 5;
        $animal->weight = 10;
        $animal->height = 80;
        $animal->race_id = 1;
        $animal->save();

        $animal = new Animal;
        $animal->name = 'horssy';
        $animal->description = 'Mammal';
        $animal->gender = 'female';
        $animal->age = 15;
        $animal->weight = 40;
        $animal->height = 150;
        $animal->race_id = 2;
        $animal->save();

        $animal = new Animal;
        $animal->name = 'kitty';
        $animal->description = 'Mammal';
        $animal->gender = 'female';
        $animal->age = 8;
        $animal->weight = 4;
        $animal->height = 40;
        $animal->race_id = 3;
        $animal->save();

        $animal = new Animal;
        $animal->name = 'snake';
        $animal->description = 'Mammal';
        $animal->gender = 'male';
        $animal->age = 6;
        $animal->weight = 3;
        $animal->height = 20;
        $animal->race_id = 4;
        $animal->save();

        $animal = new Animal;
        $animal->name = 'pandy';
        $animal->description = 'Mammal';
        $animal->gender = 'male';
        $animal->age = 13;
        $animal->weight = 35;
        $animal->height = 80;
        $animal->race_id = 5;
        $animal->save();
    }
}
