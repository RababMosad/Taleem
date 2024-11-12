<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                'course_id' => 1,
                'url' => 'https://www.youtube.com/embed/UAbH4bkyHBI?si=e2hAYPgDTx_Pa0Ss', // رابط فيديو من يوتيوب
            ],
            [
                'course_id' => 1,
                'url' => 'https://www.youtube.com/embed/UAbH4bkyHBI?si=YPlYv1ZgefOPIbKS&amp;controls=0', // رابط فيديو من يوتيوب
            ],
            [
                'course_id' => 2,
                'url' => 'https://www.youtube.com/embed/9-etE4KnqVA?si=CVtY1kvPLTwRSQXF', // رابط فيديو من يوتيوب
            ],
            [
                'course_id' => 2,
                'url' => 'https://www.youtube.com/embed/sJ__MX9OwmE?si=Sx8ePElcROPmFcTA', // رابط فيديو من يوتيوب
            ],
            // ... أضف المزيد من الفيديوهات هنا
        ];


        foreach ($videos as $videoData) {
            Video::create($videoData);
        }
    }
}
