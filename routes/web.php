<?php

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('admin.home.index');
});
Route::get('/homeId', function () {
    return view('admin.home.index');
});
Route::get('/homeEn', function () {
    return view('admin.home.index_en');
});
Route::get('/info', function () {
    return view('admin.info.index');
});
//LOGIN USER
Route::get('/loginOnline', function () {
    return view('admin.SKCKForm.login');
});
Route::get('/loginTakeAway', function () {
    return view('admin.takeaway.login');
});
Route::get('/loginDelivery', function () {
    return view('admin.delivery.login');
});
//


//SMTP
Route::get('/test_email', function() {
    return view('emails.notify_skck_online');
});

Route::get('/skck_takeaway1', function() {
    return view('emails.notify_takeaway1');
});
Route::get('/skck_takeaway2', function() {
    return view('emails.notify_takeaway2');
});
Route::get('/skck_takeaway3', function() {
    return view('emails.notify_takeaway3');
});
Route::get('/skck_takeaway4', function() {
    return view('emails.notify_takeaway4');
});
//SMTP//

// Route::get('/homeEn', 'HomeController@index_en');
// Route::get('/HomeEn', function () {
//     return view('admin.home.index_en');
// });


Route::get('home', function () {
    return redirect(route('admin.home'));
});

// INDO

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'DashboardController@__invoke')->name('dashboard');



    Route::get('upload', [App\Http\Controllers\UploadController::class, 'index'])->name('upload');
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('homeEn', [App\Http\Controllers\HomeController::class, 'index_en'])->name('homeEn');
    Route::get('home_choose', [App\Http\Controllers\HomeController::class, 'index_choose'])->name('home_choose');
    
    //SKCK IND Data
    Route::get('data', [App\Http\Controllers\DataController::class, 'index'])->name('data');
    Route::get('dataskckedit/{id}', [App\Http\Controllers\DataController::class, 'edit'])->name('dataskckedit');
    Route::get('dataskckedit', [App\Http\Controllers\DataController::class, 'edit'])->name('dataskckedit');
    Route::get('dataskckdelete/{id}', [App\Http\Controllers\DataController::class, 'destroy'])->name('dataskckdelete');
    Route::get('dataskckdelete', [App\Http\Controllers\DataController::class, 'destroy'])->name('dataskckdelete');
    Route::get('dataskckshow/{id}', [App\Http\Controllers\DataController::class, 'show'])->name('dataskckshow');
    Route::get('dataskckshow', [App\Http\Controllers\DataController::class, 'show'])->name('dataskckshow');
    Route::patch('update/{id}', [App\Http\Controllers\DataController::class, 'update'])->name('update');
    Route::patch('status/{id}', [App\Http\Controllers\DataController::class, 'status'])->name('status');

    Route::get('tik', [App\Http\Controllers\TIKController::class, 'index'])->name('tik');

    //SKCK IND FORM
    Route::get('SKCKForm', [App\Http\Controllers\SKCKFormController::class, 'index'])->name('SKCKForm');

    Route::post('school', [App\Http\Controllers\SchoolController::class, 'index'])->name('school');
    Route::get('school', [App\Http\Controllers\SchoolController::class, 'index'])->name('school');

    Route::post('couple', [App\Http\Controllers\CoupleController::class, 'index'])->name('couple');
    Route::get('couple', [App\Http\Controllers\CoupleController::class, 'index'])->name('couple');

    Route::post('offense', [App\Http\Controllers\OffenseController::class, 'index'])->name('offense');
    Route::get('offense', [App\Http\Controllers\OffenseController::class, 'index'])->name('offense');

    Route::post('other', [App\Http\Controllers\OtherInformationController::class, 'index'])->name('other');
    Route::get('other', [App\Http\Controllers\OtherInformationController::class, 'index'])->name('other');

    Route::post('attachment', [App\Http\Controllers\AttachmentController::class, 'index'])->name('attachment');
    Route::get('attachment', [App\Http\Controllers\AttachmentController::class, 'index'])->name('attachment');

    Route::post('skckstore', [App\Http\Controllers\AttachmentController::class, 'store'])->name('skckstore');

    

    //SKCK Inggris Form
    Route::get('SKCKFormEn', [App\Http\Controllers\SKCKFormController::class, 'index_en'])->name('SKCKFormEn');

    Route::post('school_en', [App\Http\Controllers\SchoolController::class, 'index_en'])->name('school_en');
    Route::get('school_en', [App\Http\Controllers\SchoolController::class, 'index_en'])->name('school_en');

    Route::post('couple_en', [App\Http\Controllers\CoupleController::class, 'index_en'])->name('couple_en');
    Route::get('couple_en', [App\Http\Controllers\CoupleController::class, 'index_en'])->name('couple_en');

    Route::post('offense_en', [App\Http\Controllers\OffenseController::class, 'index_en'])->name('offense_en');
    Route::get('offense_en', [App\Http\Controllers\OffenseController::class, 'index_en'])->name('offense_en');

    Route::post('other_en', [App\Http\Controllers\OtherInformationController::class, 'index_en'])->name('other_en');
    Route::get('other_en', [App\Http\Controllers\OtherInformationController::class, 'index_en'])->name('other_en');
    
    Route::post('attachment_en', [App\Http\Controllers\AttachmentController::class, 'index_en'])->name('attachment_en');
    Route::get('attachment_en', [App\Http\Controllers\AttachmentController::class, 'index_en'])->name('attachment_en');

    Route::post('sponsor_en', [App\Http\Controllers\SponsorController::class, 'index'])->name('sponsor_en');
    Route::get('sponsor_en', [App\Http\Controllers\SponsorController::class, 'index'])->name('sponsor_en');

    Route::post('skckstore_en', [App\Http\Controllers\AttachmentController::class, 'store_en'])->name('skckstore_en');

    //SKCK EN Data
    Route::get('dataen', [App\Http\Controllers\DataENController::class, 'index'])->name('dataen');
    Route::get('dataskcenkedit/{id}', [App\Http\Controllers\DataENController::class, 'edit'])->name('dataskcenkedit');
    Route::get('dataskcenkedit', [App\Http\Controllers\DataENController::class, 'edit'])->name('dataskcenkedit');
    Route::get('dataskcenkdelete/{id}', [App\Http\Controllers\DataENController::class, 'destroy'])->name('dataskcenkdelete');
    Route::get('dataskcenkdelete', [App\Http\Controllers\DataENController::class, 'destroy'])->name('dataskcenkdelete');
    Route::get('dataskcenkshow/{id}', [App\Http\Controllers\DataENController::class, 'show'])->name('dataskcenkshow');
    Route::get('dataskcenkshow', [App\Http\Controllers\DataENController::class, 'show'])->name('dataskcenkshow');
    Route::patch('update_en/{id}', [App\Http\Controllers\DataENController::class, 'update'])->name('update_en');
    Route::patch('status_en/{id}', [App\Http\Controllers\DataENController::class, 'status'])->name('status_en');

    //Take Away
    Route::get('uploadtakeaway/{id}', [App\Http\Controllers\TakeawayController::class, 'upload'])->name('uploadtakeaway');
    Route::get('uploadtakeaway', [App\Http\Controllers\TakeawayController::class, 'upload'])->name('uploadtakeaway');
    Route::get('takeaway', [App\Http\Controllers\TakeawayController::class, 'index'])->name('takeaway');
    Route::post('takeawaystore', [App\Http\Controllers\TakeawayController::class, 'store'])->name('takeawaystore');
    Route::post('takeawaypayment/{id}', [App\Http\Controllers\TakeawayController::class, 'payment'])->name('takeawaypayment');
    Route::post('delivery/{id}', [App\Http\Controllers\TakeawayController::class, 'payment'])->name('delivery');
    Route::get('takeawayhistory', [App\Http\Controllers\TakeawayController::class, 'history'])->name('takeawayhistory');

    Route::get('datatakeaway', [App\Http\Controllers\DataTakeawayController::class, 'index'])->name('datatakeaway');
    Route::get('datatakeawaydelete/{id}', [App\Http\Controllers\DataTakeawayController::class, 'destroy'])->name('datatakeawaydelete');
    Route::get('datatakeawaydelete', [App\Http\Controllers\DataTakeawayController::class, 'destroy'])->name('datatakeawaydelete');
    Route::get('datatakeawayshow/{id}', [App\Http\Controllers\DataTakeawayController::class, 'show'])->name('datatakeawayshow');
    Route::get('datatakeawayshow', [App\Http\Controllers\DataTakeawayController::class, 'show'])->name('datatakeawayshow');
    Route::patch('statustakeaway/{id}', [App\Http\Controllers\DataTakeawayController::class, 'status'])->name('statustakeaway');


    //SKCK DELIVERY
    Route::get('delivery', [App\Http\Controllers\DeliveryController::class, 'index'])->name('delivery');
    Route::post('deliverystore', [App\Http\Controllers\DeliveryController::class, 'store'])->name('deliverystore');
    
    
    Route::get('datadelivery', [App\Http\Controllers\DataDeliveryController::class, 'index'])->name('datadelivery');
    Route::get('datadeliverydelete/{id}', [App\Http\Controllers\DataDeliveryController::class, 'destroy'])->name('datadeliverydelete');
    Route::get('datadeliverydelete', [App\Http\Controllers\DataDeliveryController::class, 'destroy'])->name('datadeliverydelete');
    Route::get('datadeliveryshow/{id}', [App\Http\Controllers\DataDeliveryController::class, 'show'])->name('datadeliveryshow');
    Route::get('datadeliveryshow', [App\Http\Controllers\DataDeliveryController::class, 'show'])->name('datadeliveryshow');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function () {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function () {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function () {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});

Route::get('/sendmail', function () {
    \Mail::to('heyrihermawan555@gmail.com')
        ->send(new \App\Mail\PostMail('Mengirim Email Menggunakan Gmail SMTP Laravel 8', 'Anugrah Sandi'));
    return 'Terkirim';
});
