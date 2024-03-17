<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        CategorySeeder::class,
        CourseSeeder::class
    ]);
    $path = 'database/sql_files/lesson.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('lesson table seeded!');

        $path2 = 'database/sql_files/questions.sql';
        DB::unprepared(file_get_contents($path2));
        $this->command->info('questions table seeded!');

        $path3 = 'database/sql_files/propositions.sql';
        DB::unprepared(file_get_contents($path3));
        $this->command->info('proposition table seeded!');


        $path4 = 'database/sql_files/proposition_question.sql';
        DB::unprepared(file_get_contents($path4));
        $this->command->info('proposition_question table seeded!');
}
}
