<?php

namespace App\Models;

use Carbon\Carbon;
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
        'tag,'
    ];
    public function showNews()
    {
        $blogs = DB::connection('mysql')->table('blogs')->paginate(2);
        foreach ($blogs as $item) {
            $item->created_at = Carbon::parse($item->created_at)->format('Y-m-d');
        }
        return $blogs;
    }
    public function showNewDetail($id)
    {
        $blog = DB::connection('mysql')->table('blogs')->where('id', $id)->get();
        foreach ($blog as $item) {
            $item->created_at = Carbon::parse($item->created_at)->format('Y-m-d');
        }
        return $blog;
    }
    public function findNew($title)
    {
        $results = DB::table('blogs')
            ->where('title', 'LIKE', $title)
            ->get();
            return $results;
    }
    public function showRecentNews()
    {
        $blogs = DB::connection('mysql')->table('blogs')
            ->orderBy('created_at', 'desc') // Assuming 'created_at' is the column for ordering
            ->limit(3)
            ->get();
        foreach ($blogs as $item) {
            $item->created_at = Carbon::parse($item->created_at)->format('Y-m-d');
        }
        return $blogs;
    }
    public function createBlog($category, $title, $context, $image, $slug, $tag)
    {
        $blogs = DB::connection('mysql')->table('blogs')
            ->insert([
                'category' => $category,
                'title' => $title,
                'context' => $context,
                'image' => $image,
                'slug' => $slug,
                'tag' => $tag,
            ]);
        return $blogs;
    }
    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $deleted =  $blog->delete();
            if ($deleted) return true;
        }
        return false;
    }
}
