<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/'], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('menu', [WebsiteController::class, 'menu'])->name('menu');
    Route::get('paket-menu', [WebsiteController::class, 'package'])->name('package');
    Route::get('paket-menu/{slug}', [WebsiteController::class, 'packageService'])->name('package.service.show');

    Route::get('/sitemap.xml', function () {
        $staticPages = [
            url('/'),
            url('/menu'),
            url('/paket-menu'),
            url('/menu'),
        ];

        $products = Product::all();

        return response()->view('sitemap', [
            'staticPages' => $staticPages,
            'products' => $products,
        ])->header('Content-Type', 'application/xml');
    });

});
