<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'course_name'=>'Introduction to Software Engineering',
            "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
            "user_id"=>3,
            "category_id"=>1,
            "level"=>"novice",
            "status"=>1,
            "course_profile"=>"course/Introduction-to-Software-Engineering--Final-image.png",
        ]);

    Course::create([
            'course_name'=>'Software Development Lifecycle',
            "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
            "user_id"=>3,
            "category_id"=>1,
            "level"=>"difficult",
            "status"=>1,
            "course_profile"=>"course/software_development_lifecycle_logo_pexels_CC0.png",
                    ]);

                    Course::create([
                        'course_name'=>'Master of Science in Software Engineering',
                        "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                        "user_id"=>3,
                        "category_id"=>1,
                        "level"=>"difficult",
                        "status"=>1,
                        "course_profile"=>"course/master.jpg",
                                ]);

                                Course::create([
                                    'course_name'=>'Doctor of Natural Medicine',
                                    "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                                    "user_id"=>3,
                                    "category_id"=>2,
                                    "level"=>"difficult",
                                    "status"=>1,
                                    "course_profile"=>"course/medicine1.jpg",
                                            ]);

                                            Course::create([
                                                'course_name'=>'Doctor of Naturopathic Medicine Advanced Diploma',
                                                "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                                                "user_id"=>3,
                                                "category_id"=>2,
                                                "level"=>"difficult",
                                                "status"=>1,
                                                "course_profile"=>"course/medicine2.jpg",
                                                        ]);

                                                        Course::create([
                                                            'course_name'=>'React Native: Mobile App Development in 2024',
                                                            "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                                                            "user_id"=>3,
                                                            "category_id"=>3,
                                                            "level"=>"difficult",
                                                            "status"=>1,
                                                            "course_profile"=>"course/react-app.jpg",
                                                                    ]);

                                                                    Course::create([
                                                                        'course_name'=>'Flutter & Dart Essentials-Build Mobile Apps like a Pro',
                                                                        "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                                                                        "user_id"=>3,
                                                                        "category_id"=>3,
                                                                        "level"=>"difficult",
                                                                        "status"=>1,
                                                                        "course_profile"=>"course/flutter.jpg",
                                                                                ]);


    }
}
