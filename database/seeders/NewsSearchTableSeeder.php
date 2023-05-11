<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\NewsSearch;

class NewsSearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = News::all();
    
        $newsSearches = $news->map(function($n) {
            $search = new NewsSearch;
            $search->news_id = $n->id;
            $search->title = $n->title;
            $search->content = $n->content ?? '';
            return $search;
        });
    
        NewsSearch::insert($newsSearches->toArray());
    }
}
