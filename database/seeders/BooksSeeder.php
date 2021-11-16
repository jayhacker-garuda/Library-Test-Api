<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 20; $i++) {
            Book::create([
                'book_nm' => $faker->text(20),
                'author_nm' => $faker->name(),
                'publish_yr' => $faker->date('Y-m-d')
            ]);
        }
    }
}