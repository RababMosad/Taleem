<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Course::create([
            'title' => 'دورة تطوير تطبيقات الويب باستخدام Laravel',
            'description' => 'تعلم كيفية بناء تطبيقات ويب حديثة باستخدام إطار عمل Laravel.',
            'image_path' => 'download.jfif',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'price' => 99.99,
        ]);


        Course::create([
            'title' => 'دورة تطوير تطبيقات الويب باستخدام Laravel',
            'description' => 'تعلم كيفية بناء تطبيقات ويب حديثة باستخدام إطار عمل Laravel.',
            'image_path' => 'download.jfif',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'price' => 99.99,
        ]);
    }
}
