<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;

use App\Http\Livewire\Foods;
use App\Http\Livewire\Food\CreateFood;
use App\Http\Livewire\Food\EditFood;

use App\Http\Livewire\Ingredients;
use App\Http\Livewire\Ingredient\CreateIngredient;
use App\Http\Livewire\Ingredient\EditIngredient;

use App\Http\Livewire\Kitchens;
use App\Http\Livewire\Kitchen\CreateKitchen;
use App\Http\Livewire\Kitchen\EditKitchen;

use App\Http\Livewire\Tables;
use App\Http\Livewire\Table\CreateTable;
use App\Http\Livewire\Table\EditTable;

use App\Http\Livewire\Zones;
use App\Http\Livewire\Zone\CreateZone;
use App\Http\Livewire\Zone\EditZone;

use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;

use App\Http\Livewire\User\EditUser;
use App\Http\Livewire\User\CreateUser;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\VirtualReality;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

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
    return redirect('/login');
});
Route::get('/', [HomeController::class, 'index'])
    ->name('index');

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');

    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');

    Route::get('/foods', Foods::class)->name('foods');
    Route::get('/food-create', CreateFood::class)->name('food-create');
    Route::get('/food-edit/{food}', EditFood::class)->name('food-edit');

    Route::get('/ingredients', Ingredients::class)->name('ingredients');
    Route::get('/ingredient-create', CreateIngredient::class)->name('ingredient-create');
    Route::get('/ingredient-edit/{ingredient}', EditIngredient::class)->name('ingredient-edit');

    Route::get('/kitchens', Kitchens::class)->name('kitchens');
    Route::get('/kitchen-create', CreateKitchen::class)->name('kitchen-create');
    Route::get('/kitchen-edit/{kitchen}', EditKitchen::class)->name('kitchen-edit');

    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/table-create', CreateTable::class)->name('table-create');
    Route::get('/table-edit/{table}', EditTable::class)->name('table-edit');

    Route::get('/zones', Zones::class)->name('zones');
    Route::get('/zone-create', CreateZone::class)->name('zone-create');
    Route::get('/zone-edit/{zone}', EditZone::class)->name('zone-edit');

    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/virtual-reality', VirtualReality::class)->name('virtual-reality');
    Route::get('/user-profile', UserProfile::class)->name('user-profile');
    Route::get('/user-create', CreateUser::class)->name('user-create');
    Route::get('/user-edit/{user}', EditUser::class)->name('user-edit');

    Route::get('/user-management', UserManagement::class)->name('user-management');
});
