<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use HepplerDotNet\FlashToastr\Flash;

class ArticleController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('pages.articles.liste',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('pages.articles.formulaire',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'image' => 'image|max:2048', // Adjust the validation rules as needed
        ]);


        // Save the post record to the database
        $article = new Article();
        return $this->extracted_article($request, $article);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $article = Article::find($id);
        $categories = Categorie::all();

        return view('pages.articles.formulaire',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the uploaded file
        $request->validate([
            'image' => 'image|max:2048', // Adjust the validation rules as needed
        ]);


        // Save the post record to the database
        $article = Article::find($id);
        return $this->extracted_article($request, $article);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }

    /**
     * @param Request $request
     * @param $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function extracted_article(Request $request, $article): \Illuminate\Http\RedirectResponse
    {
        $image = $request->image;
        if ($image) {
            $id_unique = uniqid('image', true);
            $timestamp = time();
            $nom_fichier = md5($id_unique . $timestamp);
            $extension = $image->getClientOriginalExtension();
            $location = 'articles_images';
            $filepath = $nom_fichier . "." . $extension;
            $image->move($location, $filepath);
            $article->image = $filepath;
        }
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
//        dd($request->id_categorie);
        $article->id_categorie = $request->id_categorie;
        $article->id_auteur = Auth::user()->id;
        $article->save();
        flash()->success('success', 'Article ajouté avec succès !');

        return redirect()->route('articles.index');
    }
}

