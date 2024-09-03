<?php

namespace App\Http\Controllers;

use App\Models\Article_CategoriesModel;
use Illuminate\Http\Request;

class C_aticleController extends Controller
{
    private $c_aticle;
    public function __construct(Article_CategoriesModel $c_aticle)
    {
        $this->c_aticle = $c_aticle;
    }
    public function index()
    {
        $c_aticles = $this->c_aticle->showC_aticle();
        session()->put('page', 'c_aticle');
        return view('admin.manageCaticle', ['c_aticles' => $c_aticles]);
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $c_aticle = $this->c_aticle->create($name);
        if ($c_aticle) {
            return redirect()->route('admin.management.blogs');
        }
        return back()->withErrors('Tạo thể loại bài viết không thành công');
    }
    public function destroy($id)
    {
        $this->c_aticle->delete_article_categorie($id);
        return redirect()->route('tags.index')->with('success', 'Xóa thành công.');
    }
}
