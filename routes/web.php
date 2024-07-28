<?php

use App\Http\Controllers\Dashboard\Admin\Auth\LoginController;
use App\Http\Controllers\Dashboard\Admin\FinanceRequestController as AdminFinanceRequestController;
use App\Http\Controllers\Dashboard\Admin\InvoiceController;
use App\Http\Controllers\Dashboard\Admin\ParentController;
use App\Http\Controllers\Dashboard\Customer\AdditionalInformationController;
use App\Http\Controllers\Dashboard\Customer\ApplyController;
use App\Http\Controllers\Dashboard\Customer\FinanceRequestController;
use App\Http\Controllers\Dashboard\Customer\InvoiceController as CustomerInvoiceController;
use App\Http\Controllers\Dashboard\Customer\kidController;
use App\Http\Controllers\Dashboard\Customer\PayInvoiceController;
use App\Http\Controllers\Dashboard\Customer\ProfileController;
use App\Http\Controllers\Site\AuthController;
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

Route::get('/lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');

Route::get('/lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');

Route::get('/', function () {
    return to_route('parents.register');
});

Route::get('/dashboard/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/dashboard/login', [LoginController::class, 'login'])->name('dashboard.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



Route::get("/register", [AuthController::class,'registerForm'])->name('parents.register');
Route::post("/register", [AuthController::class,'store'])->name('parents.store');

Route::get("/login", [AuthController::class,'loginForm'])->name('parents.loginForm');
Route::post("/login", [AuthController::class,'login'])->name('parents.login');
Route::get("/parents/logout", [AuthController::class,'logout'])->name('parents.logout');

// Route::view('/dashboard', 'layouts.dashboard');



Route::middleware(['auth:parent'])->group(function () {
    Route::get('/additional-information/create', [AdditionalInformationController::class,'create'])->name('additional-information.create');
    Route::get('/additional-information/edit', [AdditionalInformationController::class,'edit'])->name('additional-information.edit');
    Route::post('/additional-information', [AdditionalInformationController::class,'store'])->name('additional-information.store');

    Route::get('/kids', [kidController::class,'index'])->name('kids.index');
    Route::get('/kids/create', [kidController::class,'create'])->name('kids.create');
    Route::post('/kids', [kidController::class,'store'])->name('kids.store');
    Route::get('/kids/{kid}/edit', [kidController::class,'edit'])->name('kids.edit');
    Route::put('/kids/{kid}/update', [kidController::class,'update'])->name('kids.update');

    Route::get('/kids/{kid}/apply', [ApplyController::class, 'apply'])->name('kids.apply');
    Route::post('/kids/apply', [ApplyController::class, 'sendApply'])->name('kids.sendApply');


    Route::get('/finance-requests', [FinanceRequestController::class, 'index'])->name('financeRequests.index');

    Route::get('/parents/profile', [ProfileController::class,'profile'])->name('parents.profile');

    Route::get('/invoices', [CustomerInvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/{invoice}/details', [CustomerInvoiceController::class, 'invoiceDetails'])->name('invoices.details');

    Route::post('/invoices/pay', [PayInvoiceController::class, 'pay'])->name('invoices.pay');
});











// -----------------------------------admin-----------------------------------------------


Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/parents', [ParentController::class, 'index'])->name('admin.parents.index');
    Route::get('/parents/{parent}/details', [ParentController::class, 'details'])->name('admin.parents.details');

    Route::get('finance-requests', [AdminFinanceRequestController::class, 'index'])->name('admin.parents.finance-requests');
    Route::get('finance-requests/{financeRequest}/accepted', [AdminFinanceRequestController::class, 'acceptedFinanceRequest'])->name('admin.finance-requests.accepted');
    Route::get('finance-requests/{financeRequest}/rejected', [AdminFinanceRequestController::class, 'rejectedFinanceRequest'])->name('admin.finance-requests.rejected');

    Route::get('finance-requests/accepted', [AdminFinanceRequestController::class, 'getAccepetdFinanceRequests'])->name('admin.finance-requests.get-accepted');
    Route::get('finance-requests/rejected', [AdminFinanceRequestController::class, 'getRejectedFinanceRequests'])->name('admin.finance-requests.get-rejected');
    Route::get('finance-requests/{financeRequest}/details', [AdminFinanceRequestController::class, 'financeRequestDetails'])->name('admin.finance-requests.financeRequestDetails');

    Route::get('finance-requests/{financeRequest}/invoice', [AdminFinanceRequestController::class, 'getFinanceRequestInvoice'])->name('admin.finance-requests.get-invoice');

    Route::get('/invoices', [InvoiceController::class, 'index'])->name('admin.invoices.index');
    Route::get('/invoices/{invoice}/details', [InvoiceController::class, 'invoiceDetails'])->name('admin.invoices.details');
});
