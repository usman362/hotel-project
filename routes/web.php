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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MesaageController;
use App\Http\Controllers\SettingController;
// use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TwoFAController;

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

Route::get('/', function () {
    return redirect('program');
});

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


Route::view('home','frontend.pages.index');

Route::get('tour-details/{slug}', [ProgramController::class, 'tour_detail'])->name('tour.detail');

// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
});
Route::post('2fa', [TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [TwoFAController::class, 'resend'])->name('2fa.resend');
Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
// 2fa
Route::middleware(['auth'])->group(function () {

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

    Route::get('allusers', [SettingController::class, 'users'])->name('setting.users');
    Route::get('users/add', [SettingController::class, 'AdduserView'])->name('setting.addUser');
    Route::post('users/add', [SettingController::class, 'AddUser'])->name('setting.addUserPost');
    Route::get('users/edit/{id}', [SettingController::class, 'EditUser'])->name('setting.EditUser');
    Route::post('users/update/{id}', [SettingController::class, 'UpdateUser'])->name('setting.UpdateUser');
    Route::get('users/delete/{id}', [SettingController::class, 'DeleteUser'])->name('setting.DeleteUser');

    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('booking/{id}', [BookingController::class, 'show'])->name('bookings.show');
    Route::get('booking/add', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('booking/add', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('booking/edit/{id}', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::post('booking/update/{id}', [BookingController::class, 'update'])->name('bookings.update');
    Route::get('booking/delete/{id}', [BookingController::class, 'destroy'])->name('bookings.delete');


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

    Route::get('activity', [ActivityController::class, 'index'])->name('activity.index');
    Route::get('activity/add', [ActivityController::class, 'create'])->name('activity.create');
    Route::post('activity/add', [ActivityController::class, 'store'])->name('activity.store');
    Route::get('activity/edit/{id}', [ActivityController::class, 'edit'])->name('activity.edit');
    Route::post('activity/update/{id}', [ActivityController::class, 'update'])->name('activity.update');
    Route::get('activity/delete/{id}', [ActivityController::class, 'destroy'])->name('activity.delete');

    Route::get('region', [RegionController::class, 'index'])->name('region.index');
    Route::get('region/add', [RegionController::class, 'create'])->name('region.create');
    Route::post('region/add', [RegionController::class, 'store'])->name('region.store');
    Route::get('region/edit/{id}', [RegionController::class, 'edit'])->name('region.edit');
    Route::post('region/update/{id}', [RegionController::class, 'update'])->name('region.update');
    Route::get('region/delete/{id}', [RegionController::class, 'destroy'])->name('region.delete');

    Route::get('pages', [PageController::class, 'index'])->name('page.index');
    Route::get('page/add', [PageController::class, 'create'])->name('page.create');
    Route::post('page/add', [PageController::class, 'store'])->name('page.store');
    Route::get('page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::post('page/update/{id}', [PageController::class, 'update'])->name('page.update');
    Route::get('page/delete/{id}', [PageController::class, 'destroy'])->name('page.delete');


    Route::get('program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('program/add', [ProgramController::class, 'create'])->name('program.create');
    Route::post('program/add', [ProgramController::class, 'store'])->name('program.store');
    Route::get('program/edit/{id}', [ProgramController::class, 'edit'])->name('program.edit');
    Route::post('program/update/{id}', [ProgramController::class, 'update'])->name('program.update');
    Route::get('program/delete/{id}', [ProgramController::class, 'destroy'])->name('program.delete');

    Route::get('teams', [TeamController::class, 'index'])->name('team.index');
    Route::get('team/add', [TeamController::class, 'create'])->name('team.create');
    Route::post('team/add', [TeamController::class, 'store'])->name('team.store');
    Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('team/delete/{id}', [TeamController::class, 'destroy'])->name('team.delete');

    Route::get('invoices', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('invoice/add', [InvoiceController::class, 'create'])->name('invoice.create');
    Route::post('invoice/add', [InvoiceController::class, 'store'])->name('invoice.store');
    Route::get('invoice/edit/{id}', [InvoiceController::class, 'edit'])->name('invoice.edit');
    Route::post('invoice/update/{id}', [InvoiceController::class, 'update'])->name('invoice.update');
    Route::get('invoice/delete/{id}', [InvoiceController::class, 'destroy'])->name('invoice.delete');
    Route::get('invoice/preview', [InvoiceController::class, 'preview'])->name('invoice.preview');
    Route::get('invoice/print', [InvoiceController::class, 'print'])->name('invoice.print');

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

    Route::get('review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('review/add', [ReviewController::class, 'create'])->name('review.create');
    Route::post('review/add', [ReviewController::class, 'store'])->name('review.store');
    Route::get('review/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::post('review/update/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::get('review/delete/{id}', [ReviewController::class, 'destroy'])->name('review.delete');

    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
});

Route::resource('users', UsersController::class);

/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
