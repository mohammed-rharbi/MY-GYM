<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $articles = article::all();
        $categories = categorie::all();

        return view('admin.article.index', compact('articles' , 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = categorie::all();
        return view('admin.article.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $userId = Auth::id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName); 
        }

        $article = new Article();
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->image = 'images/' . $imageName;
        $article->categories_id = $validatedData['category_id'];
        $article->user_id = $userId;

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
