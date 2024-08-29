<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\LoginRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $blog;
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }
    public function indexBlog()
    {

        return view('admin.manageBlogs');
    }
    public function indexCreateBlog()
    {
        return view('admin.createBlogs');
    }
    public function doCreateBlog(Request $request)
    {
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
        $context = $dom->saveHTML();
        //end xử lý đăng bài
        $category = $request->category;
        $title = $request->title;
        $image = $request->image;
        $slug = Str::slug($title, '-');
        $new = $this->blog->createBlog($category, $title, $context, $image, $slug);
        if ($new) {
            return redirect()->route('admin.management.blogs');
        }
        return back()->withErrors('Đăng bài không thành công');
    }
}
