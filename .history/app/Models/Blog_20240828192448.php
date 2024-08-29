<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'category',
        'title',
        'context',
        'image',
        'slug',
        'created_at',
    ];
    public function showNews()
    {
        $news = DB::connection('mysql')->table('gc_news')->paginate(10);
        return $news;
    }
    public function createNews($category, $title, $context, $image, $slug)
    {
        $news = DB::connection('mysql')->table('gc_news')
            ->insert([
                'category' => $category,
                'title' => $title,
                'context' => $context,
                'image' => $image,
                'slug' => $slug,
            ]);
        return $news;
    }
    public function newsMood()
    {
        $news = DB::connection('mysql')->table('gc_news')
            ->orderBy('DateTime', 'desc')
            ->take(5)
            ->get();
        foreach ($news as $item) {
            $item->DateTime = Carbon::parse($item->DateTime)->format('Y-m-d');
        }
        return $news;
    }
    public function getNew($id)
    {
        $new = DB::connection('mysql')->table('gc_news')
            ->where([
                'ID' => $id
            ])->first();
        return $new;
    }
    public function getNewindex()
    {
        $new = DB::connection('mysql')->table('gc_news')
            ->orderBy('DateTime', 'desc')
            ->take(1)
            ->get();
        return $new[0];
    }
}
