<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $heros = Hero::orderBy('created_at', 'desc')->paginate(4);
        $products = Product::orderBy('created_at','desc')->paginate(10);
        $gallerys = Gallery::orderBy('created_at','desc')->paginate(10);
        return view('beranda.index', compact('heros','products', 'gallerys'));
    }

    public function menu()
    {
        $products = Product::with('category')->get()->groupBy(fn ($product) => $product->category->name ?? 'Tanpa Kategori');

        return view('beranda.menu', compact('products'));
    }
}
