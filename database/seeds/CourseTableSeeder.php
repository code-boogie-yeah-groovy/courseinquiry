<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
          ['description' => 'AB History', 'category' => 'Humanities', 'degree' => 'Bachelor'],
          ['description' => 'BS Economics', 'category' => 'Social Sciences', 'degree' => 'Bachelor'],
          ['description' => 'Bachelor of Elementary Education', 'category' => 'Teacher Education', 'degree' => 'Bachelor'],
          ['description' => 'Bachelor of Secondary Education', 'category' => 'Teacher Education', 'degree' => 'Bachelor'],
          ['description' => 'Bachelor of Technical Teacher Education', 'category' => 'Teacher Education', 'degree' => 'Bachelor'],
          ['description' => 'BS in Industrial Education', 'category' => 'Teacher Education', 'degree' => 'Bachelor']
        ]);
    }
}
