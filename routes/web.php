<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PropertyController;
use App\Models\Message;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    return view('home', ['properties' => Property::paginate(6)]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');

Route::get('/dashboard/property', [PropertyController::class, 'index'])->name('property')->middleware('auth');
Route::get('/dashboard/property/create', [PropertyController::class, 'create'])->name('property.create')->middleware('auth');
Route::get('/dashboard/property/view/{id}', [PropertyController::class, 'show'])->name('property.view')->middleware('auth');
Route::post('/dashboard/property/store', [PropertyController::class, 'store'])->name('property.store')->middleware('auth');
Route::get('/dashboard/property/edit/{id}', [PropertyController::class, 'edit'])->name('property.edit')->middleware('auth');
Route::patch('/dashboard/property/update', [PropertyController::class, 'update'])->name('property.update')->middleware('auth');
Route::delete('/dashboard/property/delete{id}', [PropertyController::class, 'destroy'])->name('property.delete')->middleware('auth');

Route::get('/dashboard/message', [MessageController::class, 'index'])->name('message')->middleware('auth');
Route::post('/dashboard/message/store', [MessageController::class, 'store'])->name('message.store');

Route::get('/dashboard/type', function () {
    return view('dashboard.type');
})->name('type')->middleware('auth');

Route::get('/dashboard/client', function () {
    return view('dashboard.client');
})->name('client')->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/authenticate', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|max:30',
        'password' => 'required|max:30',
    ]);
    // return [Auth::attempt($credentials), $credentials];
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    
    return back()->with('failed', 'Login was unsuccessfully');
})->name('authenticate');

Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
