<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactCotroller;
use App\Http\Controllers\CrisisCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CrisisController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\Expense_categoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Models\CrisisCategory;
use App\Models\Expense;
use App\Models\VolunteerUser;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


//frontend

Route::get('/admin_profile',[ProfileController::class,'admin_profile'])->name('admin.profile');
 Route::get('/donate-info',[DonateController::class,'donateinfo'])->name('donate.info');
 Route::get('/volunteerLogin',[HomeController::class,'login'])->name('volunteer.login');
 Route::post('/login-match',[HomeController::class,'login_match'])->name('login_match');
 Route::get('/registration-form',[HomeController::class,'registration'])->name('registration');
 Route::post('/registration-store',[HomeController::class,'registration_store'])->name('registration.store');

 Route::post('/location',[HomeController::class,'location'])->name('home.loaction');

 Route::get('/frontend-crisis',[CrisisController::class,'frontend_crisis'])->name('frontend.crisis');
 Route::get('/crisis-details/{id}',[CrisisController::class,'crisis_details'])->name('crisis.details');

 //Donate
 Route::get('/',[HomeController::class,'homepage'])->name('homepage');

//  Route::get('donate/index',[DonateController::class,'donateIndex'])->name('donate.index');
 Route::get('donate-form/{crisisId}',[DonateController::class,'donateForm'])->name('donate.form');
 Route::post('donate-store',[DonateController::class,'donatestore'])->name('donate.store');


 Route::get('contactUs',[ContactCotroller::class,'contactUs'])->name('contact.us');







Route::get('/login-form',[AuthController::class,'login'])->name('login');
Route::post('/do-login',[AuthController::class,'do_login'])->name('do.login');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::post('/admin_profile/{id}',[ProfileController::class,'update'])->name('admin.update');
//Expense category

Route::get('/expense_cat_index',[Expense_categoryController::class,'index'])->name('index.expense_categories');
Route::get('/expense_cat_createe',[Expense_categoryController::class,'create'])->name('create.expense_categories');
Route::post('/expense_cat_storee',[Expense_categoryController::class,'store'])->name('store.expense_category');
Route::get('/expense_cat-edit/{id}',[Expense_categoryController::class,'expense_cat_edit'])->name('expense_cat.edit');
Route::post('/expense_cat-update/{id}',[Expense_categoryController::class,'expense_category_update'])->name('update.expense_category');
Route::get('/expense-cat-delete/{id}',[Expense_categoryController::class,'expense_cat_delete'])->name('expense.category.delete');

// Route::get('/donation',[DonationController::class,'index_donation'])->name('index.donation');
Route::get('/donor_index',[DonorController::class,'index_donor'])->name('index.donor');

//Donation
Route::get('/donation_proposal',[DonorController::class,'donation_proposal_list'])->name('donation.proposal');


Route::get('/donor_create',[DonorController::class,'create_donor'])->name('create.donor');
Route::post('/donor_store',[DonorController::class,'store_donor'])->name('store.donor');

//Volunteer controller
Route::get('/volunteer_index',[VolunteerController::class,'index'])->name('index.volunteer');
Route::get('/volunteer_add',[VolunteerController::class,'add_volunteer'])->name('add.volunteer');
Route::post('/volunteer_store',[VolunteerController::class,'volunteer_store'])->name('store.volunteer');

Route::get('/volunteer_info',[VolunteerController::class,'volunteer_info'])->name('volunteer.info');


//CrisisCategory
Route::get('/crisis-category-index',[CrisisCategoryController::class,'index'])->name('category.index');
Route::get('/crisis-category-create',[CrisisCategoryController::class,'create'])->name('category.create');
Route::post('/crisis-category-store',[CrisisCategoryController::class,'store'])->name('category.store');
Route::get('/crisis-category-edit/{id}',[CrisisCategoryController::class,'crisis_category_edit'])->name('crisis.category.edit');
Route::post('/crisis-category-update/{id}',[CrisisCategoryController::class,'crisis_category_update'])->name('update.crisis.category');
Route::get('/crisis-category-delete/{id}',[CrisisCategoryController::class,'crisis_category_delete'])->name('crisis.category.delete');


//Crisis Controller
Route::get('/index',[CrisisController::class,'index'])->name('index.crisis');
Route::get('/create',[CrisisController::class,'create'])->name('create.crisis');
Route::post('/store',[CrisisController::class,'store'])->name('store.crisis');
Route::get('/crisis-delete/{id}',[CrisisController::class,'crisis_delete'])->name('crisis.delete');
Route::get('/crisis-edit/{id}',[CrisisController::class,'crisis_edit'])->name('crisis.edit');
Route::post('/crisis-update/{id}',[CrisisController::class,'crisis_update'])->name('update.crisis');




//expense controller
Route::get('/expense_index',[ExpenseController::class,'index_expense'])->name('index.expense');
Route::get('/expense_create',[ExpenseController::class,'create_expense'])->name('create.expense');
Route::post('/expense_store',[ExpenseController::class,'store_expense'])->name('store.expense');
Route::get('/expense-edit/{id}',[ExpenseController::class,'expense_edit'])->name('expense.edit');
Route::post('/expense-update/{id}',[ExpenseController::class,'expense_update'])->name('update.expense');
Route::get('/expense-delete/{id}',[ExpenseController::class,'expense_delete'])->name('expense.delete');

//Report Crisis
Route::get('/crisis-report',[CrisisController::class,'crisis_report'])->name('crisis.report');
Route::get('/crisis-search',[CrisisController::class,'crisis_search'])->name('crisis.search');

//Report Donor

Route::get('/donor-report',[DonorController::class,'donor_report'])->name('donor.report');


//Location
Route::get('/location_index',[LocationController::class,'index'])->name('location.index');
Route::get('/location_create',[LocationController::class,'create'])->name('location.create');
Route::post('/location_store',[LocationController::class,'store'])->name('location.store');
Route::get('/location-delete/{id}',[LocationController::class,'location_delete'])->name('location.delete');

Route::get('/volunteer-delete/{id}',[VolunteerController::class,'volunteer_delete'])->name('volunteer.delete');
});
