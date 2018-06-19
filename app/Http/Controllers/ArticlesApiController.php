<?php

namespace App\Http\Controllers;

use App\Articles\Requests\CreateArticleRequest;
use Illuminate\Http\Request;
use App\Article;

class ArticlesApiController extends Controller
{
    public function store(CreateArticleRequest $request)
    {
        return Article::create($request->all(), 201);
    }
}
