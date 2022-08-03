<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            // 'name' => 'Health',
            // 'url' => "https://news.un.org/feed/subscribe/en/news/topic/health/feed/rss.xml"
            // 'name' => 'Europe',
            // 'url' => "https://www.france24.com/en/europe/rss"
            'name'=> 'Hongkong',
            'url' => "https://www.scmp.com/rss/318206/feed"
        ]);
    }
}