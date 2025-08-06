<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Hero;
use App\Models\PackageService;
use App\Models\Product;

class WebsiteController extends Controller
{
    public function index()
    {
        $heros = Hero::orderBy('created_at', 'desc')->paginate(4);
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(10);
        $packageServices = PackageService::orderBy('created_at', 'desc')->paginate(10);

        return view('beranda.index', compact('heros', 'products', 'galleries', 'packageServices'));
    }

    public function menu()
    {
        $products = Product::with('category')->get()->groupBy(fn ($product) => $product->category->name ?? 'Tanpa Kategori');

        return view('beranda.menu', compact('products'));
    }

    public function package()
    {
        $packageServices = PackageService::orderBy('created_at', 'desc')->paginate(10);

        return view('beranda.package', compact('packageServices'));
    }

    public function packageService($slug)
    {
        $packageService = PackageService::where('slug', $slug)->firstOrFail();

        return view('beranda.package-service', compact('packageService'));
    }
}
