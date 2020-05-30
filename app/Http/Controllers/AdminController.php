<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $orders = Contact::all();
        $products = Product::all();
        $the_posts = Post::all();
        $posts = Post::orderBy('id', 'DESC')->paginate(3);
        $the_orders = Contact::orderBy('id', 'DESC')->paginate(3);
        return view('admin.index',compact('users','orders','products','posts','the_posts','the_orders'));
    }
}
