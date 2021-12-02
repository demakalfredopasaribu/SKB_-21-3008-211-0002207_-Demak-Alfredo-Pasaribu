<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
      $articles = Article::paginate(5);
      return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
      //return view('single', ['title'=> $slug] );
      return view('article.single', compact('slug') );
    }

    public function create()
    {

      return view ('article.create');
    }

    public function index_pahlawan()
    {
      $pahlawan = new Article;
      $pahlawan->nama = "nama";
      $pahlawan->alamat = "alamat";
      $pahlawan->tanggal_lahir = "tanggal_lahir";
      $pahlawan->domisili = "domisili";
      $pahlawan->tanggal_wafat = "tanggal_wafat";
      $pahlawan->piagam_penghargaan = "piagam_penghargaan";
      $pahlawan->id = "id";
      $pahlawan->save();

      $pahlawans = Article::paginate(5);
      return view('article.pahlawan', compact('pahlawans'));


    }
}
