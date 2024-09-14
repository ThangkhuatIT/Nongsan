<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'article_categories';
    protected $fillable = [
        'name',
    ];
    public function create($name)
    {
        $article_categorie = DB::connection('mysql')->table('article_categories')
            ->insert([
                'name' => $name,
            ]);
        return $article_categorie;
    }
    public function delete_article_categorie($id)
    {
        $category = BlogCategoryModel::find($id);
        if ($category) {
            $deleted =  $category->delete();
            if ($deleted) return true;
        }
        return false;
    }
    public function showC_aticle()
    {
        $article_categories = DB::connection('mysql')->table('article_categories')->get();
        return $article_categories;
    }
}
