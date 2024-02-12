<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name'=>'Software Engineering',
                    ]);

                    Category::create([
                        'category_name'=>'Medicine',
                                ]);


                                            Category::create([
                                                'category_name'=>'Mobile App',
                                                        ]);
                                                        Category::create([
                                                            'category_name'=>'Web Development',
                                                                    ]);

                                                                                    Category::create([
                                                                                        'category_name'=>'Artificial Interligence',
                                                                                                ]);
                                                                                                Category::create([
                                                                                                    'category_name'=>'Digital Marketting',
                                                                                                            ]);
                                                                    Category::create([
                                                                        'category_name'=>'Entrepreneurship',
                                                                                                        ]);


    }
}
