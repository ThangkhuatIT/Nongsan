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
        $blogs = DB::connection('mysql')->table('blogs')->paginate(10);
        return $blogs;
    }
    public function createNews($category, $title, $context, $image, $slug)
    {
        $blogs = Blog::create([
            'category'=>$category,
            'title'=>$title,
            'context'=>$context,
            'image'=>$image,
            'slug'=>$slug,
        ]);
        return $blogs;
    }
    // public function getNew($id)
    // {
    //     $new = DB::connection('mysql')->table('gc_news')
    //         ->where([
    //             'ID' => $id
    //         ])->first();
    //     return $new;
    // }
    // public function getNewindex()
    // {
    //     $new = DB::connection('mysql')->table('gc_news')
    //         ->orderBy('DateTime', 'desc')
    //         ->take(1)
    //         ->get();
    //     return $new[0];
    // }
}
