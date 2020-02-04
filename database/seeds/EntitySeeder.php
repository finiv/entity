<?php

use Illuminate\Database\Seeder;
use App\Entity;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            Entity::create([
                'title' => 'Доставим в презентабельной коробке',
                'image' => 'https://placeimg.com/640/480/tech'
            ]);
        }
    }
}
