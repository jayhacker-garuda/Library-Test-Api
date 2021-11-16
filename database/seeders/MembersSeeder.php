<?php

namespace Database\Seeders;

use App\Models\Member;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 25; $i++) {
            Member::create([
                'member_nm' => $faker->name,
                'member_addr' => $faker->address,
                'member_dob' => $faker->date('Y-m-d')

            ]);
        }
    }
}