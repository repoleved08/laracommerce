<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index' ]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect' ]);

Route::get('/item_detail/{id}', [HomeController::class, 'item_detail' ]);

Route::get('/view_category', [AdminController::class, 'view_category' ]);

Route::post('/add_category', [AdminController::class, 'add_category' ]);

Route::get('/delete_cat/{id}', [AdminController::class, 'delete_cat' ]);

Route::post('/add_product', [AdminController::class, 'add_product' ]);

Route::get('/view_product', [AdminController::class, 'view_product' ]);

Route::get('/show_product', [AdminController::class, 'show_product' ]);

Route::get('/delete_product/{id}', [AdminController::class,'delete_product'] );

Route::get('/edit_product/{id}', [AdminController::class,'update_product'] );

Route::post('/change_product/{id}', [AdminController::class, 'change_product' ]);

Route::post('/addto_cart/{id}', [HomeController::class, 'addto_cart' ]);

Route::get('/show_cart', [HomeController::class, 'show_cart' ]);

Route::get('/delete_cart/{id}', [HomeController::class,'delete_cart'] );

Route::get('/payment_option/{totalprice}', [HomeController::class,'payment_option'] );

Route::get('/stripe/{totalprice}', [HomeController::class,'stripe'] );

Route::post('stripe/{totalprice}', [HomeController::class, 'stripePost'])->name('stripe.post');

Route::get('/userorders', [HomeController::class,'userorders'] );

Route::get('/success', [HomeController::class,'success'] );

Route::get('/orders', [AdminController::class,'orders'] );

Route::get('/delivered/{id}', [AdminController::class,'delivered'] );

Route::get('/bot', [AdminController::class,'bot'] );

Route::get('/blogpost', [HomeController::class,'blogpost'] );

Route::post('/add_bot', [AdminController::class,'add_bot'] );

Route::get('/bitcoin/{totalprice}', [App\Http\Controllers\PaymentController::class, 'bitcoin']);

Route::post('/pay/{totalprice}', [App\Http\Controllers\PaymentController::class, 'pay']);
