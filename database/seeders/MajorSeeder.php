<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Major::truncate();
        $majors = ["Informatika", "Marketing", "Managemen", "Desingn"];
        foreach ($majors as $major) {
        Major::create([
            "name" => "$major",
            "description" => "Jurusan $major"
        ]);
    }
    }
}