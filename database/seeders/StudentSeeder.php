<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ctrl + space for create deklaration
        // Student::create([
        //     "name" => "Supar",
        //     "date_birth" => "2015-01-01",
        //     "gender" => "Male",
        //     "address" => "tanjung malaka",
        //     "major_id" => "2"
        // ]);
        Student::truncate();// kolom untuk membersihkan data dan mengisiulang
        $faker = Factory::create('id_ID');
        $majors = Major::get();
        for ($i = 0; $i < 100; $i++) {
            $gender = ( $i % 2) ? 'male' : 'female';
            Student::create([
                "name" => $faker->name($gender),
                "date_birth" => "2015-01-01",
                "gender" => $gender,
                "address" => $faker->address,
                "major_id" => $majors->random()->id,
            ]);
        }
    }
}