<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Мобильные телефоны',
                'code' => 'mobiles',
                'description' => 'В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!',
                'image' => 'categories/mobiles.jpg',
            ],
            [
                'name' => 'Портативная техника',
                'code' => 'portable',
                'description' => 'Раздел с портативной техникой.',
                'image' => 'categories/portable.jpg',
            ],
            [
                'name' => 'Бытовая техника',
                'code' => 'appliances',
                'description' => 'Раздел с бытовой техникой',
                'image' => 'categories/appliances.jpg',
            ],
            [
                'name' => 'Игровые консоли',
                'code' => 'console',
                'description' => 'Раньше геймеры выбирали между тетрисом и 8-битными приставками, сегодня же игровая индустрия сделала огромный скачок.',
                'image' => 'categories/consoles.jpg',
            ],
        ]);
    }
}
