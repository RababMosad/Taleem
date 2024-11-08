<?php

namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'عنوان المقال الأول',
            'content' => 'هذا هو محتوى المقال الأول. يمكنك إضافة المزيد من النصوص هنا.',   
        ]);
        Article::create([
            'title' => 'عنوان المقال الثاني',
            'content' => 'هذا هو محتوى المقال الثاني. يمكنك إضافة المزيد من النصوص هنا.',
        ]);
    }
}
