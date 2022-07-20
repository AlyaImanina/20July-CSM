
<?php

use App\Models\Registersme;

use App\Models\Pgpksprogramme;
use App\Exports\SmeexcelsExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpController;
use App\Http\Controllers\SmeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReportmpController;
use App\Http\Controllers\SmeexcelController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\RegistermpController;
use App\Http\Controllers\BookingdateController;
use App\Http\Controllers\RegistersmeController;
use App\Http\Controllers\ReportadminController;
use App\Http\Controllers\PgpksprogrammeController;

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
    return view('auth.login');
});

Route::get('index1', function () {
    return view('pgpksprogrammes.edit');
});


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',function(){
    return view('dashboards.admins.index');
})->middleware('isAdmin');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        // Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');

        Route::resource('registermps', RegistermpController::class);
        Route::resource('registersmes', RegistersmeController::class);
        Route::resource('statistics', StatisticController::class);
        
        Route::resource('pgpksprogrammes', PgpksprogrammeController::class);
        
        Route::resource('bookingdates', BookingdateController::class);

        //import excel
        Route::get('/index', [SmeexcelController::class, 'index']);
        Route::post('/index', [SmeexcelController::class, 'import']);
        Route::get('/upload/show', [SmeexcelController::class, 'show']);
        Route::post('index/{$id}', [SmeexcelController::class, 'destroy']);

        Route::resource('smeexcels',SmeexcelController::class);

        //export excel
        Route::get('/export',[SmeexcelController::class, 'export']);

        Route::get('export-csv', function () {
            return Excel::download(new SmeexcelsExport, 'smeexcels.csv');
        });

        Route::post('smeexcel/{id}', [SmeexcelController::class,'accept'])->name('smeexcel.accept');

        //upload admin 
        Route::resource('reportadmins',ReportadminController::class);
        Route::get('/uploadpage', [ReportadminController::class, 'reportadmins.index']);
        Route::post('/uploadreport', [ReportadminController::class, 'store']);
        Route::get('/show', [ReportadminController::class, 'show']);
    
        Route::get('/download/{file}', [ReportadminController::class, 'download']);
        Route::get('/view/{id}', [ReportadminController::class, 'view']);

       


});

Route::group(['prefix'=>'sme', 'middleware'=>['isSme','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[SmeController::class,'index'])->name('sme.dashboard');
    Route::get('profile',[SmeController::class,'profile'])->name('sme.profile');
    Route::get('settings',[SmeController::class,'settings'])->name('sme.settings');
});

Route::group(['prefix'=>'mp', 'middleware'=>['isMp','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[MpController::class,'index'])->name('mp.dashboard');
    Route::get('profile',[MpController::class,'profile'])->name('mp.profile');
    Route::get('settings',[MpController::class,'settings'])->name('mp.settings');
    
    Route::resource('events', EventController::class);
    Route::resource('reports', ReportmpController::class);

    //report mp upload
    Route::get('/uploadpage', [ReportmpController::class, 'reports.index']);
    Route::post('/uploadreport', [ReportmpController::class, 'store']);
    Route::get('/show', [ReportmpController::class, 'show']);

    Route::get('/download/{file}', [ReportmpController::class, 'download']);
    Route::get('/view/{id}', [ReportmpController::class, 'view']);
});

