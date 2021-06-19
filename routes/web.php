<?php

use App\Http\Controllers\ProductsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = Product::all();
    return view('products', ['products' => $products]);
});
Route::get('/products/{product}', function (Product $product) {
    // $product = Product::find($id);
    return view('product', ['product' => $product]);
});

Route::get('/create_product', function () {
    Product::create([
        'product_name' => 'Thulo Laptop',
        'product_desc' => 'This is the nice laptop for the shell in the market so we can buy and use for the future use of the dofferent purpose.',
        'price' => '1200000',
        'image' => ''
    ]);
});

Route::get('/home', [ProductsController::class, 'index']);


Route::get('/categories/{category}', function (Category $category) {
    // $products = Product::whereCategoryId($category->id)->get();
    $products = $category->products;
    return view(' category', ['products' => $products, 'category' => $category]);
});



// Route::get('/get_product', function () {
//    $products =  Product::get();
//    return $products;
    
// });


// admin routing
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('products_list');
Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductsController::class, 'create'])->name('create_product');
Route::post('/admin/products/store',  [App\Http\Controllers\Admin\ProductsController::class, 'store']);
Route::get('/admin/products/edit/{product}',  [App\Http\Controllers\Admin\ProductsController::class, 'edit']);
