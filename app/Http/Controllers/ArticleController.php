<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $articles = article::all();
        $categories = categorie::all();


        
        if(Auth::user()->Role == 'admin'){
            return view('admin.article.index', compact('articles' , 'categories'));
        }else{
            return view('coach.article.index', compact('articles' , 'categories'));
        }
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = categorie::all();


        if(Auth::user()->Role == 'admin'){
            return view('admin.article.create' , compact('categories'));
        }else{
            return view('coach.article.create' , compact('categories'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|file|max:9048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $userId = Auth::id();


        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images','public');
        }

        
        $article = new article();
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->img = $image;
        $article->categories_id = $validatedData['category_id'];
        $article->users_id = $userId;

        $article->save();


        if(Auth::user()->Role == 'admin'){
            return redirect()->route('article.index')->with('success', 'Article created successfully.');
        }else{
            return redirect()->route('My_Article')->with('success', 'Article created successfully.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $article = article::findOrFail($id);

        return view('member.show_article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $article = article::where('id',$id)->where('users_id',auth::id())->firstOrFail();
        $categories = categorie::all();


        if(Auth::user()->Role == 'admin'){
            return view('admin.article.edit' , compact('categories','article'));
        }else{
            return view('coach.article.edit' , compact('categories','article'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
    
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:9048',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        if ($request->hasFile('image')) {
            if (File::exists(public_path($article->img))) {
                File::delete(public_path($article->img));
            }

            $image = $request->file('image')->store('images','public');

            $article->img = $image;
        }
    
        

        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->categories_id = $validatedData['category_id'];
    
        $article->save();
    
        if(Auth::user()->Role == 'admin'){
            return redirect()->route('article.index')->with('success', 'Article updated successfully.');
        }else{
            return redirect()->route('My_Article')->with('success', 'Article created successfully.');
        }
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);    

        if (File::exists(public_path($article->img))) {
            File::delete(public_path($article->img));
        }

        $article->delete();

        if(Auth::user()->Role == 'admin'){
            return redirect()->route('article.index')->with('success', 'Article updated successfully.');
        }else{
            return redirect()->route('My_Article')->with('success', 'Article created successfully.');
        }  
      }

}
