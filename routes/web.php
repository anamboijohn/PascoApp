<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PascoController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Models\Leaderboard;
use App\Models\Level;
use App\Models\Pasco;
use App\Models\Question;
use App\Models\Record;
use App\Models\User;
use HiFolks\Statistics\Statistics;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
//**************************************************************************************** */
Route::get('/explore', [HomeController::class, 'explore'])->name('explore');
Route::get('/explore/jhs', function(){
    return view('outside_app.jhs_explore');
})->name('jhs');
Route::get('/explore/shs', function(){
    return view('outside_app.shs_explore');
})->name('shs');
//**************************************************************************************** */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('test', function(){
    return view('testLogin');
});



Route::middleware(['auth','web'])->group(function () {
    Route::get('/dashboard/levels', [LevelController::class, 'levels'])->name('levels');
    Route::get('/dashboard/levels/{level:slug}', [ProgrammeController::class, 'programmes'])->name('programmes');
    Route::get('/dashboard/levels/programmes/{programme:slug}', [SubjectController::class,'subjects'])->name('subjects');
    Route::get('/dashboard/levels/programmes/subjects/{subject:slug}', [PascoController::class,'pascos'])->name('pascos');
    Route::get('/dashboard/pasco.all', [PascoController::class, 'showAll'])->name('pasco.showAll');
    Route::get('/dashboard/levels/programmes/subjects/pasco/{pasco}', [QuestionController::class, 'questions'])->name('questions');
    Route::get('/dashboard/levels/programmes/subjects/pasco/check/{pasco_id}', [QuestionController::class, 'check'])->name('questions.check');
    Route::get('/generate-pdf/{user}', [RecordController::class, 'generatePDF'])->name('downloadPDF');
    Route::get('/dashboard/levels/programmes/subjects/pasco/checks/save/{pasco}', [RecordController::class, 'save'])->name('record.save');
    Route::get('/dashboard/levels/programmes/subjects/pasco/checks/save/pasco/view/{pasco}',[RecordController::class, 'saveView'])->name('record.view');
    Route::get('/dashboard/reports.showAll/{user}', [RecordController::class, 'showAll'])->name('record.showAll');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/create.image', [UserController::class, 'store'])->name('store.image');
    Route::get('/dashboard/leaderboard', [LeaderboardController::class, 'leader'])->name('leaderboard');
    Route::post('/email/{user}', [UserController::class, 'emailEdit'])->name('emailEdit');
    Route::post('/userNameEdit/{user}', [UserController::class, 'userNameEdit'])->name('userNameEdit');
    Route::post('/countryEdit/{user}', [UserController::class, 'countryEdit'])->name('countryEdit');
    Route::post('/phoneEdit/{user}', [UserController::class, 'phoneEdit'])->name('phoneEdit');
    Route::post('/schoolEdit/{user}', [UserController::class, 'schoolEdit'])->name('schoolEdit');
    Route::post('/regionEdit/{user}', [UserController::class, 'regionEdit'])->name('regionEdit');
    Route::get('/public.profile/{user}', [UserController::class, 'publicProfile'])->name('public.profile');

});




require __DIR__.'/auth.php';
