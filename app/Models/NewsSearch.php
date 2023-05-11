<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsSearch extends Model
{
    protected $table = 'news_search';

    protected $fillable = [
        'news_id',
        'title',
        'content',
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
