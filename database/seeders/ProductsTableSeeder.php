<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone X 64GB',
                'code' => 'iphone_x_64',
                'description' => 'Отличный продвинутый телефон с памятью на 64 gb',
                'price' => '71990',
                'category_id' => 1,
                'image' => 'products/iphone_x.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
                        ],
            [
                'name' => 'iPhone 13 256GB',
                'code' => 'iphone_13_256',
                'description' => 'Отличный продвинутый телефон с памятью на 256 gb',
                'price' => '89990',
                'category_id' => 1,
                'image' => 'products/iphone_x_silver.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Realme C55 256Gb Black',
                'code' => 'realme_ c55_256Gb_black',
                'description' => 'Зачем платить за лишнее? Легендарный Realme',
                'price' => '12490',
                'category_id' => 1,
                'image' => 'products/Realme_ C55_256Gb Black.jpeg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'iPhone 5SE',
                'code' => 'iphone_5se',
                'description' => 'Отличный классический iPhone',
                'price' => '17221',
                'category_id' => 1,
                'image' => 'products/iphone_5.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Наушники Beats Audio',
                'code' => 'beats_audio',
                'description' => 'Отличный звук от Dr. Dre',
                'price' => '20221',
                'category_id' => 2,
                'image' => 'products/beats.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Камера GoPro',
                'code' => 'gopro',
                'description' => 'Снимай самые яркие моменты с помощью этой камеры',
                'price' => '12000',
                'category_id' => 2,
                'image' => 'products/gopro.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Камера Panasonic HC-V770',
                'code' => 'panasonic_hc-v770',
                'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
                'price' => '27900',
                'category_id' => 2,
                'image' => 'products/video_panasonic.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Кофемашина DeLongi',
                'code' => 'delongi',
                'description' => 'Хорошее утро начинается с хорошего кофе!',
                'price' => '25200',
                'category_id' => 3,
                'image' => 'products/delongi.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Холодильник Haier',
                'code' => 'haier',
                'description' => 'Для большой семьи большой холодильник!',
                'price' => '40200',
                'category_id' => 3,
                'image' => 'products/haier.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Блендер Moulinex',
                'code' => 'moulinex',
                'description' => 'Для самых смелых идей',
                'price' => '4200',
                'category_id' => 3,
                'image' => 'products/moulinex.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Мясорубка Bosch',
                'code' => 'bosch',
                'description' => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
                'price' => '9200',
                'category_id' => 3,
                'image' => 'products/bosch.jpg',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Sony Playstation 5 825 ГБ SSD',
                'code' => 'ps5',
                'description' => 'Самая популярная консоль нового поколения!PlayStation 5 получила 16 ГБ оперативной памяти нового стандарта GDDR6 с пропускной способностью 448 ГБ в секунду. PlayStation 5 имеет оптический привод Ultra HD Blu-ray и использует диски Blu-ray объёмом до 100 ГБ.',
                'price' => '55000',
                'category_id' => 4,
                'image' => 'products/ps5.png',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
            [
                'name' => 'Series X 1000 ГБ SSD',
                'code' => 'xbox',
                'description' => 'Собранная в оригинальном черном корпусе игровая консоль Microsoft Xbox Series X внешне напоминает мини-компьютер. Конфигурация устройства впечатляет не меньше, чем внешний вид. Консоль оборудована 3.8-гигагерцовым процессором AMD Zen 2, видеоядром AMD RDNA 2, 16 ГБ оперативной памяти GDDR6 и 1 ТБ встроенной памяти.',
                'price' => '41000',
                'category_id' => 4,
                'image' => 'products/xbox.png',
                'count' => rand(0,10),
                'new' => rand(1,0),
                'hit' => rand(1,0),
                'recommend' => rand(1,0),
            ],
        ]);
    }
}
