<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Post;
use App\Product;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function getProduct () {

        $categories = Category::select(
            'name_'. LaravelLocalization::getCurrentLocale() .' as name','id'
        )->get();

        $products = Product::select(
            'title_'. LaravelLocalization::getCurrentLocale() .' as title',
            'photo_id','category_id','price'
        )->get();

        return view('home.store',compact('categories','products'));

    }

    public function show($id)
    {
      $category = Category::find($id);
      $products = $category->products()->select(
          'title_'. LaravelLocalization::getCurrentLocale() .' as title',
          'photo_id','category_id','price'
      )->get();

        $categories = Category::select(
            'name_'. LaravelLocalization::getCurrentLocale() .' as name','id'
        )->get();
        return view('home.category',compact('categories','products'));
    }

    public function getPosts() {
        $posts = Post::orderBy('id', 'DESC')->paginate(10);

        return view('home.blog',compact('posts'));
    }

    public function showPost($id){
        $post = Post::findOrFail($id);
        return view('home.post',compact('post'));
    }

    public function Contact(ContactRequest $request) {
        $input = $request->all();
        Contact::create($input);
        return redirect()->back()->with(['done'=>trans('website.done')]);
    }


    public function getProductHome() {
        $products = Product::select(
            'title_'. LaravelLocalization::getCurrentLocale() .' as title',
            'photo_id','category_id','price'
        )->orderBy('id', 'DESC')->paginate(3);
        return view('home.home',compact('products'));
    }

    public function about() {
        return view('home.about');
    }
}
