<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MesaageController;
use App\Http\Controllers\MoneySetupController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingGlobalController;
// use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TwoFAController;
use App\Http\Controllers\WidgetController;
use Illuminate\Support\Facades\Route;

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



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

// $menu = theme()->getMenu();
// array_walk($menu, function ($val) {
//     if (isset($val['path'])) {
//         $route = Route::get($val['path'], [PagesController::class, 'index']);

//         // Exclude documentation from auth middleware
//         if (!Str::contains($val['path'], 'documentation')) {
//             $route->middleware(['auth','2fa']);
//         }
//     }
// });

// Frontend Routes...
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/activities',[HomeController::class,'activities'])->name('activities');
Route::get('/activities-2',[HomeController::class,'activities2'])->name('activities2');
Route::get('/destinations',[HomeController::class,'destination'])->name('destinations');
Route::get('/destinations-2',[HomeController::class,'destination2'])->name('destinations2');
Route::get('/blogs',[HomeController::class,'blogs'])->name('blogs');
Route::get('/blog-detail/{slug}',[HomeController::class,'blogDetail'])->name('blog.detail');
Route::get('/bookings',[HomeController::class,'booking'])->name('bookings');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
Route::get('/faqs',[HomeController::class,'faq'])->name('faqs');
Route::get('/general',[HomeController::class,'general'])->name('general');
Route::get('/our-clients',[HomeController::class,'our_client'])->name('our.client');
Route::get('/our-teams',[HomeController::class,'our_team'])->name('our.team');
Route::get('/reviews',[HomeController::class,'review'])->name('reviews');
Route::get('/tours',[HomeController::class,'tours'])->name('tours');
Route::get('tour-details/{slug}', [HomeController::class, 'tour_detail'])->name('tour.detail');
Route::post('store-newsletter',[HomeController::class,'newsletter'])->name('store.newsletter');
Route::post('contact-us',[InquiryController::class,'contact_store'])->name('contact.store');

Route::get('/checkout/{slug}',[HomeController::class,'book_now_page'])->name('book_now_page');
Route::post('change-currency',[HomeController::class,'change_currency'])->name('change.currency');


Route::controller(MoneySetupController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('paypal-payment', [PayPalController::class,'payment'])->name('payment');
Route::get('paypal-cancel', [PayPalController::class,'cancel'])->name('payment.cancel');
// Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));
Route::get('paypal', [PayPalController::class,'getPaymentStatus'])->name('status');
// Admin Panel Routes....

// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
});

// 2fa
Route::post('2fa', [TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [TwoFAController::class, 'resend'])->name('2fa.resend');
Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');

Route::middleware(['auth','admin'])->group(function () {
    // Settings Routes..
    Route::get('global', [SettingController::class, 'global'])->name('setting.global');
    Route::post('global', [SettingController::class, 'globalPost'])->name('setting.Postglobal');
    Route::get('account', [SettingController::class, 'account'])->name('setting.account');
    Route::post('account', [SettingController::class, 'accountPost'])->name('setting.Postaccount');

    Route::get('email', [SettingController::class, 'emailView'])->name('setting.email');
    Route::post('email', [SettingController::class, 'PostEmail'])->name('setting.PostEmail');

    Route::get('widget', [SettingController::class, 'widgetView'])->name('setting.widget');
    Route::post('widget', [SettingController::class, 'Postwidget'])->name('setting.Postwidget');

    Route::get('payment', [SettingController::class, 'payment'])->name('setting.payment');
    Route::post('payment', [SettingController::class, 'Postpayment'])->name('setting.Postpayment');

    Route::get('navigation', [SettingController::class, 'navigation'])->name('setting.navigation');
    Route::get('navigation/add', [SettingController::class, 'navigationAdd'])->name('setting.addNav');
    Route::post('navigation/add', [SettingController::class, 'navAdd'])->name('setting.addNavPost');
    Route::get('navigation/edit/{id}', [SettingController::class, 'navEdit'])->name('setting.nav.edit');
    Route::post('navigation/update/{id}', [SettingController::class, 'navUpdate'])->name('setting.nav.update');
    Route::get('navigation/delete/{id}', [SettingController::class, 'navdelete'])->name('setting.nav.delete');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/add', [UserController::class, 'create'])->name('users.create');
    Route::post('users/add', [UserController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('users/delete/{id}', [UserController::class, 'destroy'])->name('users.delete');


    //Widgets
    Route::get('widgets',[WidgetController::class,'index'])->name('widgets.index');

    //Global Setting

    Route::resource('settings',SettingGlobalController::class);


    // Booking Routes

    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('booking/{id}', [BookingController::class, 'show'])->name('bookings.show');
    Route::get('bookings/add', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('bookings/add', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('booking/edit/{id}', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::post('booking/update/{id}', [BookingController::class, 'update'])->name('bookings.update');
    Route::get('booking/delete/{id}', [BookingController::class, 'destroy'])->name('bookings.delete');

    // Destination Routes

    Route::get('destination', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('destination/add', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('destination/add', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('destination/edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::post('destination/update/{id}', [DestinationController::class, 'update'])->name('destination.update');
    Route::get('destination/delete/{id}', [DestinationController::class, 'destroy'])->name('destination.delete');

    // Route::get('program', [ProgramController::class, 'index'])->name('program.index');
    // Route::get('program/add', [ProgramController::class, 'create'])->name('program.create');
    // Route::post('program/add', [ProgramController::class, 'store'])->name('program.store');
    // Route::get('program/edit/{id}', [ProgramController::class, 'edit'])->name('program.edit');
    // Route::post('program/update/{id}', [ProgramController::class, 'update'])->name('program.update');
    // Route::get('program/delete/{id}', [ProgramController::class, 'destroy'])->name('program.delete');

    //Activity Routes

    Route::get('activity', [ActivityController::class, 'index'])->name('activity.index');
    Route::get('activity/add', [ActivityController::class, 'create'])->name('activity.create');
    Route::post('activity/add', [ActivityController::class, 'store'])->name('activity.store');
    Route::get('activity/edit/{id}', [ActivityController::class, 'edit'])->name('activity.edit');
    Route::post('activity/update/{id}', [ActivityController::class, 'update'])->name('activity.update');
    Route::get('activity/delete/{id}', [ActivityController::class, 'destroy'])->name('activity.delete');

    // Region Routes

    Route::get('region', [RegionController::class, 'index'])->name('region.index');
    Route::get('region/add', [RegionController::class, 'create'])->name('region.create');
    Route::post('region/add', [RegionController::class, 'store'])->name('region.store');
    Route::get('region/edit/{id}', [RegionController::class, 'edit'])->name('region.edit');
    Route::post('region/update/{id}', [RegionController::class, 'update'])->name('region.update');
    Route::get('region/delete/{id}', [RegionController::class, 'destroy'])->name('region.delete');

    // Faq Routes

    Route::resource('faq',FaqController::class);

    // Pages Routes

    Route::get('pages', [PageController::class, 'index'])->name('page.index');
    Route::get('page/add', [PageController::class, 'create'])->name('page.create');
    Route::post('page/add', [PageController::class, 'store'])->name('page.store');
    Route::get('page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::post('page/update/{id}', [PageController::class, 'update'])->name('page.update');
    Route::get('page/delete/{id}', [PageController::class, 'destroy'])->name('page.delete');

    //Program Routes
    Route::get('/dashboard',function(){
        return redirect(route('program.index'));
    })->name('dashboard');
    Route::get('program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('program/add', [ProgramController::class, 'create'])->name('program.create');
    Route::post('program/add', [ProgramController::class, 'store'])->name('program.store');
    Route::get('program/edit/{id}', [ProgramController::class, 'edit'])->name('program.edit');
    Route::post('program/update/{id}', [ProgramController::class, 'update'])->name('program.update');
    Route::get('program/delete/{id}', [ProgramController::class, 'destroy'])->name('program.delete');

    // Teams Routes

    Route::get('teams', [TeamController::class, 'index'])->name('team.index');
    Route::get('team/add', [TeamController::class, 'create'])->name('team.create');
    Route::post('team/add', [TeamController::class, 'store'])->name('team.store');
    Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('team/delete/{id}', [TeamController::class, 'destroy'])->name('team.delete');

    // Invoice Routes

    Route::get('invoices', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('invoice/add', [InvoiceController::class, 'create'])->name('invoice.create');
    Route::post('invoice/add', [InvoiceController::class, 'store'])->name('invoice.store');
    Route::get('invoice/edit/{id}', [InvoiceController::class, 'edit'])->name('invoice.edit');
    Route::post('invoice/update/{id}', [InvoiceController::class, 'update'])->name('invoice.update');
    Route::get('invoice/delete/{id}', [InvoiceController::class, 'destroy'])->name('invoice.delete');
    Route::get('invoice/preview/{id}', [InvoiceController::class, 'preview'])->name('invoice.preview');
    Route::get('invoice/print/{id}', [InvoiceController::class, 'print'])->name('invoice.print');
    Route::post('invoice/payment', [InvoiceController::class, 'store_payment'])->name('invoice.payment');
    Route::get('invoice/pdf/{id}', [InvoiceController::class, 'pdf'])->name('invoice.pdf');
    Route::get('invoice/mail', [InvoiceController::class, 'mail'])->name('invoice.mail');

    // Blog Routes

    Route::get('blogCategory', [BlogCategoryController::class, 'showCategory'])->name('category.index');
    Route::get('blogCategory/add', [BlogCategoryController::class, 'addCategory'])->name('category.create');
    Route::get('blogTags', [BlogCategoryController::class, 'showTags'])->name('tags.index');
    Route::get('blogTags/add', [BlogCategoryController::class, 'addTags'])->name('tags.create');
    Route::get('blogPages', [BlogController::class, 'index'])->name('blogpages.index');
    Route::get('blogPages/add', [BlogController::class, 'create'])->name('blogpages.create');
    Route::post('blogPages/add', [BlogController::class, 'store'])->name('blogpages.store');
    Route::get('blogPages/edit/{id}', [BlogController::class, 'edit'])->name('blogpages.edit');
    Route::post('blogPages/update/{id}', [BlogController::class, 'update'])->name('blogpages.update');
    Route::get('blogPages/delete/{id}', [BlogController::class, 'destroy'])->name('blogpages.delete');

    Route::get('messages', [MesaageController::class, 'index'])->name('messages.index');
    Route::get('messages/show', [MesaageController::class, 'show'])->name('messages.view');

    // Review Routes

    Route::get('review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('review/add', [ReviewController::class, 'create'])->name('review.create');
    Route::post('review/add', [ReviewController::class, 'store'])->name('review.store');
    Route::get('review/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::post('review/update/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::get('review/delete/{id}', [ReviewController::class, 'destroy'])->name('review.delete');

    // Inquiry Routes

    Route::get('/inquiries',[InquiryController::class,'index'])->name('inquiry.index');
    Route::post('/delete-inquiry',[InquiryController::class,'destroy'])->name('inquiry.delete');

    Route::resource('customers',CustomerController::class);
    Route::get('getCustomer',[CustomerController::class,'getCustomer'])->name('get.Customer');

    // Uploads Route

    // Route::controller(AizUploadController::class)->group(function () {
//     Route::post('/aiz-uploader', 'show_uploader');
//     Route::post('/aiz-uploader/upload', 'upload');
//     Route::get('/aiz-uploader/get_uploaded_files', 'get_uploaded_files');
//     Route::post('/aiz-uploader/get_file_by_ids', 'get_preview_files');
//     Route::get('/aiz-uploader/download/{id}', 'attachment_download')->name('download_attachment');
// });

Route::resource('/uploaded-files', AizUploadController::class);
Route::controller(AizUploadController::class)->group(function () {
    Route::any('/uploaded-files/file-info', 'file_info')->name('uploaded-files.info');
    Route::get('/uploaded-files/destroy/{id}', 'destroy')->name('uploaded-files.destroy');
});

    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings_account.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings_account.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings_account.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings_account.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
    Route::resource('users', UsersController::class);
});


/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
