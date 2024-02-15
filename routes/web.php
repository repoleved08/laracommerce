<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\PaymentController;

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

Route::post('/addto_cart/{id}', [HomeController::class, 'addto_cart' ]);

Route::get('/show_cart', [HomeController::class, 'show_cart' ]);

Route::get('/delete_cart/{id}', [HomeController::class,'delete_cart'] );

Route::get('/payment_option/{totalprice}', [HomeController::class,'payment_option'] );

Route::get('/stripebtn/{totalprice}', [HomeController::class,'stripebtn'] );

Route::post('stripenewer/{totalprice}', [HomeController::class, 'stripenewer']);

Route::get('/userorders', [HomeController::class,'userorders'] );

Route::get('/success', [HomeController::class,'success'] );

Route::get('/blogpost', [HomeController::class,'blogpost'] );

Route::get('/detailed_page/{id}', [HomeController::class,'detailed_page'] );

Route::get('/cancel_order/{id}', [HomeController::class,'cancel_order'] );

Route::get('/download/{filename}', [HomeController::class,'download'] );

Route::get('/bots_page', [HomeController::class,'bots_page'] );
//strategy_payment route with $totalprice parameter
Route::get('/strategy_payment/{totalprice}', [HomeController::class,'strategy_payment'] );
//paypal route called paypal_strat
Route::get('/paypal_strat/{totalprice}', [HomeController::class,'paypal_strat'] );
Route::post('/paypals/{totalprice}', [HomeController::class,'paypals'] );

// bitcoin_strat route with $totalprice parameter
Route::get('/bitcoin_strat/{totalprice}', [HomeController::class,'bitcoin_strat'] );
Route::get('/bitcoin/{totalprice}', [HomeController::class, 'bitcoin']);

Route::post('/pay_strat/{totalprice}', [HomeController::class, 'pay_strat']);

//Admin

Route::get('/view_category', [AdminController::class, 'view_category' ])->middleware('auth');

Route::post('/add_category', [AdminController::class, 'add_category' ]);

Route::get('/delete_cat/{id}', [AdminController::class, 'delete_cat' ]);

Route::post('/add_product', [AdminController::class, 'add_product' ]);

Route::get('/view_product', [AdminController::class, 'view_product' ]);

Route::get('/show_product', [AdminController::class, 'show_product' ]);

Route::get('/delete_product/{id}', [AdminController::class,'delete_product'] );

Route::get('/edit_product/{id}', [AdminController::class,'update_product'] );

Route::post('/change_product/{id}', [AdminController::class, 'change_product' ]);

Route::get('/orders', [AdminController::class,'orders'] );

Route::get('/delivered/{id}', [AdminController::class,'delivered'] );
Route::get('/delivery_status/{id}', [AdminController::class,'delivery_status'] );

Route::get('/bot', [AdminController::class,'bot'] );

Route::post('/add_bot', [AdminController::class,'add_bot'] );

Route::get('adminstrategyorders', [AdminController::class,'adminstrategyorders'] );

Route::get('/search', [AdminController::class,'search'] );



//Strategy

Route::get('/strategies', [StrategyController::class, 'strategies' ]);

Route::get('/add_strategy', [StrategyController::class,'add_strategy'] );

Route::post('/handle_strategy', [StrategyController::class,'handle_strategy'] );

Route::get('/strategy_cart/{id}', [StrategyController::class,'strategy_cart'] );

Route::post('/add_cart/{id}', [StrategyController::class,'add_cart'] );

Route::get('/display_strategy_cart', [StrategyController::class,'display_strategy_cart'] );

Route::get('/del_cart/{id}', [StrategyController::class,'del_cart'] );



// Payment

Route::get('/bitcoin/{totalprice}', [App\Http\Controllers\PaymentController::class, 'bitcoin']);

Route::post('/pay/{totalprice}', [App\Http\Controllers\PaymentController::class, 'pay']);

Route::get('/index_payment/{totalprice}', [App\Http\Controllers\PaymentController::class, 'index_payment']);
//Paypal

//Route::post('/paypal_payment/{totalprice}', [PaymentController::class, 'paypal_payment']);

Route::get('/paypal_page/{totalprice}', [PaymentController::class,'paypal_page'] );
Route::get('/paypal_success', [PaymentController::class,'paypal_success'] );
Route::post('/paypalnew/{totalprice}', [PaymentController::class,'paypalnew'] );

//new

Route::post('stripenew/{totalprice}', [PaymentController::class, 'stripenew'])->name('stripenew');

Route::get('success', [PaymentController::class, 'success'])->name('success');

Route::get('cancel', [PaymentController::class, 'cancel'])->name('cancel');

Route::get('/strategy_orders', [PaymentController::class,'strategy_orders'] );

//func
Route::get('/home/success', function () {
    return view('home.success');
})->name('payment.success');

Route::get('/home/cancel', function () {
    return view('home.cancel');
})->name('payment.cancel');


//Blog Post


Route::get('/add_post', [PostController::class,'add_post'] );

Route::post('/handle_post', [PostController::class,'handle_post'] );

Route::get('/view_post', [PostController::class,'view_post'] );


//stripe

// Route::name('home.')
//     ->controller(PaymentController::class)
//     ->prefix('home')
//     ->group(function () {
//         Route::get('payment', 'index_payment')->name('index_payment');
//         Route::post('payment', 'store')->name('store');
//     });
