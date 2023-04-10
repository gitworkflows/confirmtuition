<?php

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

//Clear Cache
Route::get('clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'Cache Cleared Successfully'; //Return anything
});

Route::get('/', function () {
    return view('home');
});

Route::get('application-form', [App\Http\Controllers\PageController::class, 'application_form'])->name('application.form');
Route::post('application-store', [App\Http\Controllers\PageController::class, 'application_store'])->name('application.from.store');

Route::get('birth', [App\Http\Controllers\PageController::class, 'birth'])->name('birth');
Route::get('death', [App\Http\Controllers\PageController::class, 'death'])->name('death');
Route::get('number', [App\Http\Controllers\PageController::class, 'number'])->name('number');
Route::get('admit', [App\Http\Controllers\PageController::class, 'admit'])->name('admit');
Route::get('certificate', [App\Http\Controllers\PageController::class, 'certificate'])->name('certificate');
Route::get('registration', [App\Http\Controllers\PageController::class, 'registration'])->name('registration');
Route::get('status', [App\Http\Controllers\PageController::class, 'status'])->name('statuse');
Route::get('reset', [App\Http\Controllers\PageController::class, 'reset'])->name('reset');
Route::get('complain', [App\Http\Controllers\PageController::class, 'complain'])->name('complain');
Route::post('check/status', [App\Http\Controllers\PageController::class, 'check_status'])->name('check.status');

Auth::routes();
Route::group(['middleware' => 'auth'], function()
{
    Route::get('profile', [App\Http\Controllers\PageController::class, 'profile'])->name('profile');
    Route::get('jobs', [App\Http\Controllers\PageController::class, 'jobs'])->name('jobs');
    Route::get('edit-profile', [App\Http\Controllers\PageController::class, 'editProfile'])->name('edit.profile');
    Route::get('edit-basic-info', [App\Http\Controllers\PageController::class, 'editBasicInfo'])->name('edit.basic.info');
    Route::get('edit-credentials', [App\Http\Controllers\PageController::class, 'editCredentials'])->name('edit.credentials');
    Route::get('edit-personal-info', [App\Http\Controllers\PageController::class, 'editPersonalInfo'])->name('edit.personal.info');
    Route::get('edit-job-preferences', [App\Http\Controllers\PageController::class, 'editJobPreferences'])->name('edit.job.preferences');
    Route::get('edit-educational-information', [App\Http\Controllers\PageController::class, 'editEducationalInformation'])->name('edit.educational.information');
    Route::get('change-password', [App\Http\Controllers\PageController::class, 'changePasword'])->name('change.password');
    Route::post('user/update', [App\Http\Controllers\PageController::class, 'userUpddate'])->name('user.upddate');
    //update profile routes
    Route::post('add-education', [App\Http\Controllers\ProfileController::class, 'addEducation'])->name('add.education');
    // Route::post('edit-education', [App\Http\Controllers\ProfileController::class, 'editEducation'])->name('edit.education');
    Route::post('edit-basic-info', [App\Http\Controllers\ProfileController::class, 'updateBasicInfo'])->name('update.basic.info');
    Route::post('edit-credentials', [App\Http\Controllers\ProfileController::class, 'updateCredentials'])->name('update.credentials');
    Route::post('edit-personal-info', [App\Http\Controllers\ProfileController::class, 'updatePersonalInfo'])->name('update.personal.info');
    Route::post('edit-job-preferences', [App\Http\Controllers\ProfileController::class, 'updateJobPreferences'])->name('update.job.preferences');
    Route::get('get-location/{id}', [App\Http\Controllers\PageController::class, 'getLocation'])->name('get.location');
    Route::get('remove-education/{id}', [App\Http\Controllers\ProfileController::class, 'removeEducation'])->name('remove.education');
    Route::post('change-password', [App\Http\Controllers\ProfileController::class, 'changePassword'])->name('change.password');
    Route::post('astatus/change', [App\Http\Controllers\PageController::class, 'astatuschange'])->name('astatus.change');
    Route::post('adm/change', [App\Http\Controllers\PageController::class, 'admchange'])->name('adm.change');
    Route::get('applications', [App\Http\Controllers\PageController::class, 'applications'])->name('applications');
    Route::get('user/application/{id}', [App\Http\Controllers\PageController::class, 'invoice'])->name('user.invoice');
    Route::get('user/applicationdetails/{id}', [App\Http\Controllers\PageController::class, 'invoicedetails'])->name('user.invoicedetails');
});
Route::group(['middleware' => 'admin'], function()
{
    Route::get('admin', [App\Http\Controllers\DashboardPagesController::class, 'index'])->name('admin');
    Route::get('admin/applications', [App\Http\Controllers\DashboardPagesController::class, 'applications'])->name('admin.applications');
    Route::get('admin/application/{id}', [App\Http\Controllers\DashboardPagesController::class, 'application'])->name('admin.application');
    Route::get('admin/applicationd/{id}', [App\Http\Controllers\DashboardPagesController::class, 'invoice'])->name('admin.invoice');
});