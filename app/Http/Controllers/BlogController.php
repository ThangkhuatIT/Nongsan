<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogsRequest;
use App\Models\BlogCategoryModel;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    private $blog;
    private $tag;
    private $c_aticle;
    public function __construct(Blog $blog, Tag $tag, BlogCategoryModel $c_aticle)
    {
        $this->blog = $blog;
        $this->tag = $tag;
        $this->c_aticle = $c_aticle;
    }
    public function indexBlog()
    {
        $blogs = $this->blog->showNews();
        session()->put('page', 'blogs');
        return view('admin.manageBlogs', ['blogs' => $blogs]);
    }
    public function indexBlogDetail($id)
    {
        $blog = $this->blog->showNewDetail($id);
        session()->put('page', 'blogs');
        return view('blog_detail', ['blogs' => $blog]);
    }
    public function indexCreateBlog()
    {
        $tags = $this->tag->showtags();
        $c_aticles = $this->c_aticle->showC_aticle();
        return view('admin.createBlogs', ["tags" => $tags, "c_aticles" => $c_aticles]);
    }
    public function doCreateBlog(CreateBlogsRequest $request)
    {
        try {
            if ($request->has('file_upload')) {
                $file = $request->file_upload;
                $ext = $file->extension();
                $file_name = time() . 'News.' . $ext;
                $file->move(public_path('uploads'), $file_name);
                $request->merge(['image' => $file_name]);
            }
            $context = $request->editordata;

            //xu ly đăng bài


            $dom = new \DomDocument();

            $dom->loadHtml($context, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $imageFile = $dom->getElementsByTagName('imageFile');

            foreach ($imageFile as $item => $image) {

                $data = $image->getAttribute('src');

                list($type, $data) = explode(';', $data);

                list(, $data)      = explode(',', $data);

                $imgeData = base64_decode($data);

                $image_name = "/upload/" . time() . $item . '.png';

                $path = public_path() . $image_name;

                file_put_contents($path, $imgeData);

                $image->removeAttribute('src');

                $image->setAttribute('src', $image_name);
            }
            $tag = $request->tag;
            $category = $request->category;
            $title = $request->title;
            $image = $request->image;
            $slug = Str::slug($title, '-');
            $blog = $this->blog->createBlog($category, $title, $context, $image, $slug, $tag);
            if ($blog) {
                return redirect()->route('admin.management.blogs')->with('success', 'Đăng bài thành công!');
            }
        } catch (\Throwable $e) {
            return redirect()->route('admin.management.blogs')->with('erorr', 'Đăng bài thất bại!');
        }
    }
    public function indexEditBlog($id)
    {
        // dd(1);
        try {
            $tags = $this->tag->showtags();
            $c_aticles = $this->c_aticle->showC_aticle();
            $blog = $this->blog->findBlog($id);
            session()->put('Id_blogEdit', $blog->id);
            if (!$blog) {
                throw  new \Exception('Bài đăng không tồn tại');
            }
            return view('admin.editBlogs', ['blog' => $blog, "tags" => $tags, "c_aticles" => $c_aticles]);
        } catch (\Throwable $e) {
            return back()->withErrors($e->getMessage());
        }
    }
    public function doEditBlog(Request $request)
    {
        // dd($request);
        // try {
            if ($request->has('file_upload')) {
                $file = $request->file_upload;
                $ext = $file->extension();
                $file_name = time() . 'News.' . $ext;
                $file->move(public_path('uploads'), $file_name);
                $request->merge(['image' => $file_name]);
            }
            $context = $request->editordata;

            //xu ly đăng bài
            $dom = new \DomDocument();

            $dom->loadHtml($context, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $imageFile = $dom->getElementsByTagName('imageFile');

            foreach ($imageFile as $item => $image) {

                $data = $image->getAttribute('src');

                list($type, $data) = explode(';', $data);

                list(, $data)      = explode(',', $data);

                $imgeData = base64_decode($data);

                $image_name = "/upload/" . time() . $item . '.png';

                $path = public_path() . $image_name;

                file_put_contents($path, $imgeData);

                $image->removeAttribute('src');

                $image->setAttribute('src', $image_name);
            }
            $tag = $request->tag;
            $category = $request->category;
            $title = $request->title;
            $image = $request->image;
            $slug = Str::slug($title, '-');
            $blog = $this->blog->editBlog(session('Id_blogEdit'), $category, $title, $context, $image, $slug, $tag);
            if ($blog) {
                return redirect()->route('admin.management.blogs')->with('success', 'Sửa bài thành công!');
            }
        // } catch (\Throwable $e) {
        //     return redirect()->route('admin.management.blogs')->with('erorr', 'Sửa bài thất bại!');
        // }
    }
}
