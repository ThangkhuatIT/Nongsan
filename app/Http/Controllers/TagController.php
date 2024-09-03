<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    private $tag;
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }
    public function index()
    {
        $tags = $this->tag->showtags();
        session()->put('page', 'tag');
        return view('admin.manageTag', ['tags' => $tags]);
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $tag = $this->tag->createTag($name);
        if ($tag) {
            return redirect()->route('');
        }
        return back()->withErrors('Tạo tag không thành công');
    }
    public function destroy($id)
    {
        $this->tag->deleteTag($id);
        return redirect()->route('')->with('success', 'Xóa thành công.');
    }
}
