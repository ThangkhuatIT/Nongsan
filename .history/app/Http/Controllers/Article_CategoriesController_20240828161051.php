<?php

namespace App\Http\Controllers;

use App\Models\Article_CategoriesModel;
use Illuminate\Http\Request;

class Article_CategoriesController extends Controller
{
    private $article_categorie;
    public function __construct(Article_CategoriesModel $article_categorie)
    {
        $this->article_categorie = $article_categorie;
    }
}
