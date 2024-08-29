<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article_CategoriesModel extends Model
{
    use HasFactory;
    protected $table = 'article_categories';
    protected $fillable = [
        'name',
    ];
    public function create($name)
    {
        $category = Article_CategoriesModel::create([
            'name' => $name,
        ]);
    }
}
