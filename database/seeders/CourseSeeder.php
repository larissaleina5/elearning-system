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
            'slug'=>'introduction-to-software-engineering',
            "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
            "user_id"=>3,
            "category_id"=>1,
            "level"=>"novice",
            'isPopular'=>1,
            "status"=>1,
            "course_profile"=>"course/Introduction-to-Software-Engineering--Final-image.png",
        ]);

    Course::create([
            'course_name'=>'Software Development Lifecycle',
            'slug'=>'software-development-lifecycle',
            "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
            "user_id"=>3,
            'isPopular'=>0,
            "category_id"=>1,
            "level"=>"difficult",
            "status"=>1,
            "course_profile"=>"course/software_development_lifecycle_logo_pexels_CC0.png",
                    ]);

                    Course::create([
                        'course_name'=>'Master of Science in Software Engineering',
                        'slug'=>'master-of-science-in-software-engineering',
                        "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                        "user_id"=>3,
                        'isPopular'=>1,
                        "category_id"=>1,
                        "level"=>"difficult",
                        "status"=>1,
                        "course_profile"=>"course/master.jpg",
                                ]);

                                Course::create([
                                    'course_name'=>'Doctor of Natural Medicine',
                                    'slug'=>'doctor-of-natural-medicine',
                                    'isPopular'=>1,
                                    "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                                    "user_id"=>3,
                                    "category_id"=>2,
                                    "level"=>"difficult",
                                    "status"=>1,
                                    "course_profile"=>"course/medicine1.jpg",
                                            ]);

                                            Course::create([
                                                'course_name'=>'Doctor of Naturopathic Medicine Advanced Diploma',
                                                'slug'=>'doctor-of-naturopathic-medicine-advanced-diploma',
                                                'isPopular'=>0,
                                                "course_description"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni officiis expedita neque praesentium quos ea sed voluptates hic repellat distinctio dignissimos maxime fugit repudiandae cum ipsam delectus, perspiciatis quidem.",
                                                "user_id"=>3,
                                                "category_id"=>2,
                                                "level"=>"difficult",
                                                "status"=>1,
                                                "course_profile"=>"course/medicine2.jpg",
                                                        ]);

                                                        Course::create([
                                                            'course_name'=>'React Native: Mobile App Development in 2024',
                                                            'slug'=>'react-native-mobile-development-in-2024',
                                                            'isPopular'=>0,
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
                                                                        'slug'=>'flutter-dart-essebtials-build-mobile-apps-like-a-pro',
                                                                        "user_id"=>3,
                                                                        'isPopular'=>0,
                                                                        "category_id"=>3,
                                                                        "level"=>"difficult",
                                                                        "status"=>1,
                                                                        "course_profile"=>"course/flutter.jpg",
                                                                                ]);

                                                                                Course::create([
                                                                                    'course_name'=>'Learn HTML',
                                                                                    "course_description"=>"Fun fact: all websites use HTML — even this one. It’s a fundamental part of every web developer’s toolkit. HTML provides the content that gives web pages structure, by using elements and tags, you can add text, images, videos, forms, and more. Learning HTML basics is an important first step in your web development journey and an essential skill for front- and back-end developers.",
                                                                                    'slug'=>'learn-html',
                                                                                    "user_id"=>2,
                                                                                    'isPopular'=>0,
                                                                                    "category_id"=>1,
                                                                                    "level"=>"Novice",
                                                                                    "status"=>1,
                                                                                    "course_profile"=>"course/LBUjI0MB2WnOZae2SviphxrTfgzCX4WqaNBPKFzM.png",
                                                                                            ]);


    }
}
