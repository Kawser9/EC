<?php

use App\Http\Controllers\backend\AjaxController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\PHPMailerController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\OrderController;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin-login',[DashboardController::class,'adminLogin'])->name('admin.login');
Route::post('/admin-do-login',[DashboardController::class,'adminDoLogin'])->name('admin.do.login');

Route::group(['prefix'=>'admin','middleware'=>'admin'], function(){

    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');



    Route::get('/employee-all-list',[EmployeeController::class,'employee_all_list'])->name('employee.all.list');
    Route::get('/employee-list',[EmployeeController::class,'index'])->name('employee.list');
    Route::get('/employee-create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/employee-store',[EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee-edit/{id}',[EmployeeController::class, 'edit'])->name('employee.edit');
    Route::get('/employee-show/{id}',[EmployeeController::class, 'show'])->name('employee.show');
    Route::put('/employee-update/{id}',[EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/employee-delete/{id}',[EmployeeController::class, 'delete'])->name('employee.delete');

    Route::get('/employee-search',[EmployeeController::class, 'employee_search'])->name('employee.search');
    Route::get('/ajax/employee-details/search/{search_query}',[EmployeeController::class, 'ajax_employee_details'])->name('employee.ajax_employee_details');

    Route::get('/department-list',[DepartmentController::class, 'index'])->name('department.list');
    Route::get('/department-create',[DepartmentController::class, 'create'])->name('department.create');
    Route::post('/department-store',[DepartmentController::class, 'store'])->name('department.store');
    Route::get('/department-edit/{id}',[DepartmentController::class, 'edit'])->name('department.edit');
    Route::put('/department-update/{id}',[DepartmentController::class, 'update'])->name('department.update');
    Route::get('/department-delete/{id}',[DepartmentController::class, 'delete'])->name('department.delete');

    Route::get('/send-email-to-employee/email-from/{id}' ,[PHPMailerController::class, 'email_from'])->name('employee.email.from');
    Route::post('/send-email-message-to-employee/email-from' ,[PHPMailerController::class, 'email_data'])->name('employee.email.data');


    Route::get('/report',[ReportController::class, 'list'])->name('report.list');
    Route::get('/report_selary/ditails/total',[ReportController::class, 'ditails_total'])->name('report.selary.ditails.total');
    Route::get('/depWiseReportList',[ReportController::class, 'depWiseReportList'])->name('depWiseReport.list');
    Route::get('/general/report',[ReportController::class, 'general_report'])->name('general.report');
    Route::get('/general/report/dataa',[ReportController::class, 'general_report_data'])->name('general.report.data');
    // Route::get('/report/depWiseReport/{departmentId}',[ReportController::class, 'depWiseReport'])->name('get.departmentData');
    // Route::get('/get-department-data/{departmentId}',[ReportController::class ,'getDepartmentData'])->name('get.departmentData');

    Route::get('/product-list',[ProductController::class, 'list'])->name('product.list');
    Route::get('/product-create',[ProductController::class, 'create'])->name('product.create');
    Route::post('/product-store',[ProductController::class, 'store'])->name('product.store');
    Route::get('/product-edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product-update{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('/product-show/{id}',[ProductController::class, 'show'])->name('product.show');
    Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product/pdf',[ProductController::class, 'productPdf'])->name('product.pdf');
    Route::get('/product/excel',[ProductController::class, 'export'])->name('product.excel');
    Route::get('/product/excel/upload',[ProductController::class, 'excelUpload'])->name('product.excelUpload');
    Route::get('/getStockNotifications',[ProductController::class, 'getStockNotifications'])->name('getStockNotifications');


    Route::get('/allOrder/list', [OrderController::class, 'allOrder'])->name('allOrder.list');
    Route::get('/order/list', [OrderController::class, 'list'])->name('order.list');
    Route::get('/order/ajaxlist', [OrderController::class, 'ajaxList'])->name('order.ajaxList');
    Route::get('/order/show/{id}', [OrderController::class, 'show'])->name('order.show');
    Route::put('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order/pdf/{id}', [OrderController::class, 'orderPdf'])->name('order.pdf');




    Route::get('/customer/list', [CustomerController::class, 'list'])->name('customer.list');
    Route::get('/customer/ajaxList', [CustomerController::class, 'ajaxList'])->name('customer.ajaxList');


    // Route::get('/ajax/data_list', [AjaxController::class, 'list'])->name('ajax.list');
    // Route::post('/ajax/store', [AjaxController::class, 'store'])->name('ajax.store');
    // Route::get('/ajax/edit/{id}', [AjaxController::class, 'edit'])->name('ajax.edit');


    // Route::get('/list', [AjaxController::class, 'list'])->name('ajax.list');
    // Route::get('/show', [AjaxController::class, 'getMembers']);
    // Route::post('/save', [AjaxController::class, 'save']);
    // Route::post('/delete', [AjaxController::class, 'delete']);
    // Route::post('/update', [AjaxController::class, 'update']);

    Route::get('products', [AjaxController::class, 'index'])->name('ajax.index');
    Route::post('store-product', [AjaxController::class, 'store']);
    Route::post('edit-product', [AjaxController::class, 'edit']);
    Route::post('delete-product', [AjaxController::class, 'destroy']);

});


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/all/product', [HomeController::class, 'allProduct'])->name('allProduct');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/addToCart/{id}',[HomeController::class,'addToCart'])->name('add.to.cart');
Route::get('/clear/cart',[HomeController::class,'clearCart'])->name('clear.cart');
Route::get('/remove/card_item/{id}',[HomeController::class, 'remove'])->name('card.item.remove');



Route::get('/registration', [CustomerController::class, 'registration'])->name('customer.registration');
Route::post('/customer/store', [CustomerController::class, 'customerStore'])->name('customer.store');
Route::get('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/do-login', [CustomerController::class, 'doLogin'])->name('customer.doLogin');


Route::group(['middleware'=>'customer'], function(){
    Route::get('/customer/logout', [CustomerController::class, 'logOut'])->name('customer.logout');
    Route::get('/customer/profile', [CustomerController::class, 'customerProfile'])->name('customer.profile');
    Route::get('/customer/edit/profile', [CustomerController::class, 'customerEditProfile'])->name('customerEdit.profile');
    Route::post('/customer/profileUpdate', [CustomerController::class, 'customerProfileUpdate'])->name('customer.profileUpdate');
    Route::get('/checkout', [OrderController::class, 'checkOut'])->name('check.out');
    Route::post('/place/order', [OrderController::class, 'placeOrder'])->name('place.order');




});
