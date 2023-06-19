<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tenantController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/dasboard', function(){
    return view('dashboard');
});


// Tenants routes
Route::get('/viewTenants', [tenantController::class, 'viewTenant']);

Route::get('/addTenants', function(){
    return view('tenants.addTenant');
});
Route::post('/registerTenants', [tenantController::class, 'addTenant']);
// End of Tenant routestenantController