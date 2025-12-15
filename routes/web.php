<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('auth/{provider}', [WebsiteController::class, 'redirect'])->name('social.redirect');
Route::get('auth/{provider}/callback', [WebsiteController::class, 'callback'])->name('social.callback');


Route::get('/cmd', function () {
    Artisan::call('storage:link');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return 'Done';
});





Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');


Route::get('/products', [WebsiteController::class, 'products'])->name('products');
Route::get('/blogs/{slug}', [WebsiteController::class, 'singleBlog'])->name('blogs-single');

Route::get('/product/{slug}/ref/{referal_code}', [WebsiteController::class, 'productSingleAffiliateReferal'])->name('referal.product');
Route::get('/product/{slug}/user/{referal_code}', [WebsiteController::class, 'productSingleAffiliateReferalUser'])->name('user.referal.product');
Route::get('/product/{slug}/affiliate/{affiliate_id}', [WebsiteController::class, 'productSingleAffiliate'])->name('product.show');
Route::get('/product/{slug}', [WebsiteController::class, 'productSingle'])->name('product.single');

Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
Route::post('/order-store', [WebsiteController::class, 'orderStore'])->name('order.store');
// Track Order
Route::get('/track-order', [WebsiteController::class, 'trackorder'])->name('track.order');
Route::get('/success/{order_id}', [WebsiteController::class, 'orderSuccess'])->name('order.success');




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/pay', [SslCommerzPaymentController::class, 'pay'])->name('pay');
Route::post('/fail', [SslCommerzPaymentController::class, 'fail'])->name('fail');
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel'])->name('cancel');
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//SSLCOMMERZ END





Route::get('categories/{slug}', [WebsiteController::class, 'categories'])->name('categories');
Route::get('/live-search', [WebsiteController::class, 'liveSearch'])->name('product.liveSearch');
Route::post('/coupon/validate', [WebsiteController::class, 'validateCoupon'])->name('coupon.validate');



Route::get('/reviews', [WebsiteController::class, 'reviews'])->name('reviews');
Route::get('/contacts', [WebsiteController::class, 'contacts'])->name('contacts');
Route::post('/contacts-store', [WebsiteController::class, 'contactStore'])->name('contact.store');


Auth::routes(); // ✅ Removed ['verify' => true]


require __DIR__.'/admin.php';



// php artisan migrate:refresh --path=database/migrations/2025_12_05_203201_create_commission_earns_table.php