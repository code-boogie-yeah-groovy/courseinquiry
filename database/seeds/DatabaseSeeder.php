<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('CourseTableSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Course table seeded :)");
    }
}
