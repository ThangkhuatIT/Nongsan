<?php

namespace App\Http\Controllers;

use App\Models\Article_CategoriesModel;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $blog;
    private $tag;
    private $c_aticle;
    public function __construct(Blog $blog, Tag $tag, Article_CategoriesModel $c_aticle)
    {
        $this->blog = $blog;
        $this->tag = $tag;
        $this->c_aticle = $c_aticle;
    }
    public function home_blog()
    {
        $tags = $this->tag->showtags();
        $c_aticles = $this->c_aticle->showC_aticle();
        $blogs = $this->blog->showNews();
        $recentBlogs = $this->blog->showRecentNews();
        // dd($blogs);
        return view('blog', ['tags' => $tags, 'c_aticles' => $c_aticles, 'blogs' => $blogs, 'recentBlogs' => $recentBlogs]);
    }
    public function find(Request $request)
    {
        $blogs = $this->blog->findNew($request->title);
        dd($blogs);
    }
}
