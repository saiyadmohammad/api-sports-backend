<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // $table->string('title');
    // $table->string('subtitle')->nullable();
    // $table->longText('blog_data')->nullable();
    // $table->string('image')->nullable();
    // $table->string('type')->nullable();
    // $table->string('slug')->unique();
    // $table->integer('order')->default(0);
    // $table->boolean('is_active')->default(true);
    // $table->string('author')->nullable();
    // $table->string('tags')->nullable();
    // $table->string('keywords')->nullable();
    public function run(): void
    {
        //
        Blog::create([
            'title' => 'Sample Blog Title',
            'subtitle' => 'Sample Blog Subtitle',
            'blog_data' => 'This is a sample blog content.',
            'image' => 'assets/blog-img/blog-img-1.png',
            'type' => 'news',
            'slug' => 'sample-blog-title',
            'order' => 1,
            'is_active' => true,
            'author' => 'John Doe',
            'tags' => ['sample', 'blog', 'news'],
            'keywords' => ['sample', 'blog', 'news'],
        ]);

        Blog::create([
            'title' => 'Another Sample Blog Title',
            'subtitle' => 'Another Sample Blog Subtitle',
            'blog_data' => 'This is another sample blog content.',
            'image' => 'assets/blog-img/blog-img-1.png',
            'type' => 'tutorial',
            'slug' => 'another-sample-blog-title',
            'order' => 1,
            'is_active' => true,
            'author' => 'John Doe',
            'tags' => ['sample', 'blog', 'news'],
            'keywords' => ['sample', 'blog', 'news'],
        ]);

        Blog::create([
            'title' => 'Yet Another Sample Blog Title',
            'subtitle' => 'Yet Another Sample Blog Subtitle',
            'blog_data' => 'This is yet another sample blog content.',
            'image' => 'assets/blog-img/blog-img-1.png',
            'type' => 'article',
            'slug' => 'yet-another-sample-blog-title',
            'order' => 1,
            'is_active' => true,
            'author' => 'John Doe',
            'tags' => ['sample', 'blog', 'news'],
            'keywords' => ['sample', 'blog', 'news'],
        ]);
    }
}
