<?php

Route::redirect('/home','/');
//==========Test  ===========

Route::get('test', 'ProductPurchasesController@test')->name('test');
//==========Shopping Side ===========
Route::get('/Shoppingcheckout', 'ProductPurchasesController@Shoppingcheckout')->name('Shoppingcheckout');
Route::get('/addtocart/{id}', 'ProductPurchasesController@getAddToCart')->name('addtocart');


//==========Customer Side ===========
Route::get('/', 'ProductPurchasesController@index')->name('welcome');
Route::get('empty', 'ProductPurchasesController@cartReset')->name('cartReset');
Route::get('product/{id}', 'ProductPurchasesController@singleProduct')->name('singleProduct');
Route::get('checkout/{id}', 'ProductPurchasesController@checkout')->name('checkout');
Route::post('checkout', 'ProductPurchasesController@newProductPurchases')->name('checkouto');

//============ Redirect to Dashboard Role based on login =============
Route::get('/dashboard','HomeController@index')->name('dashboard');
//==================
Auth::routes();
//============
//User
//=============
Route::prefix('user')->group(function(){

    Route::get('dashboard','UserController@dashboard')->name('userDashboard');
    Route::get('charts','UserController@charts')->name('userCharts');
//===================== Profile ==================
    Route::get('profile','UserController@profile')->name('userProfile');
    Route::post('profile','UserController@profilePost')->name('userProfilePost');
//===================== Product =================
    Route::get('products','UserController@products')->name('userProducts');
    Route::get('products/new','UserController@newProduct')->name('userNewProduct');
    Route::post('products/new','UserController@newProductPost')->name('userNewProductPost');
    Route::get('product/{id}','UserController@editProduct')->name('userEditProduct');
    Route::post('product/{id}','UserController@editProductPost')->name('userEditProductPost');
    Route::post('product/{id}/delete','UserController@deleteProduct')->name('userDeleteProduct');
 //==================== Supplier =======================
    Route::get('suppliers','UserController@suppliers')->name('userSuppliers');
    Route::get('suppliers/new','UserController@newSupplier')->name('userNewSupplier');
    Route::post('suppliers/new','UserController@newSupplierPost')->name('userNewSupplierPost');
    Route::get('supplier/{id}','UserController@editSupplier')->name('userEditSupplier');
    Route::post('supplier/{id}','UserController@editSupplierPost')->name('userEditSupplierPost');
    Route::post('supplier/{id}/delete','UserController@deleteSupplier')->name('userDeleteSupplier');
//==================== Customer =============
    Route::get('customers','UserController@customers')->name('userCustomers');
    Route::get('customers/new','UserController@newCustomer')->name('userNewCustomer');
    Route::post('customers/new','UserController@newCustomerPost')->name('userNewCustomerPost');
    Route::get('customer/{id}','UserController@editCustomer')->name('userEditCustomer');
    Route::post('customer/{id}','UserController@editCustomerPost')->name('userEditCustomerPost');
    Route::post('customer/{id}/delete','UserController@deleteCustomer')->name('userDeleteCustomer');
//=============== Purchases =================
    Route::get('purchases','UserController@purchases')->name('userPurchases');
    
});

//==================
//Admin
//================
Route::prefix('admin')->group(function(){

    Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');
    Route::get('charts','AdminController@charts')->name('adminCharts');
//=============== Profile ==================
    Route::get('profile','AdminController@profile')->name('adminProfile');
    Route::post('profile','AdminController@profilePost')->name('adminProfilePost');
//=============== User ==================
    Route::get('users','AdminController@users')->name('adminUsers');
    Route::get('users/new','AdminController@newUser')->name('adminNewUser');
    Route::post('users/new','AdminController@newUserPost')->name('adminNewUserPost');
    Route::get('user/{id}/edit','AdminController@editUser')->name('adminEditUser');
    Route::post('user/{id}/edit','AdminController@editUserPost')->name('adminEditUserPost');
    Route::post('user/{id}/delete','AdminController@deleteUser')->name('adminDeleteUser');
//=============== Product =================
    Route::get('products','AdminController@products')->name('adminProducts');
    Route::get('products/new','AdminController@newProduct')->name('adminNewProduct');
    Route::post('products/new','AdminController@newProductPost')->name('adminNewProductPost');
    Route::get('product/{id}','AdminController@editProduct')->name('adminEditProduct');
    Route::post('product/{id}','AdminController@editProductPost')->name('adminEditProductPost');
    Route::post('product/{id}/delete','AdminController@deleteProduct')->name('adminDeleteProduct');
//================ Supplier =======================
    Route::get('suppliers','AdminController@suppliers')->name('adminSuppliers');
    Route::get('suppliers/new','AdminController@newSupplier')->name('adminNewSupplier');
    Route::post('suppliers/new','AdminController@newSupplierPost')->name('adminNewSupplierPost');
    Route::get('supplier/{id}','AdminController@editSupplier')->name('adminEditSupplier');
    Route::post('supplier/{id}','AdminController@editSupplierPost')->name('adminEditSupplierPost');
    Route::post('supplier/{id}/delete','AdminController@deleteSupplier')->name('adminDeleteSupplier');
//================ Customer =============
    Route::get('customers','AdminController@customers')->name('adminCustomers');
    Route::get('customers/new','AdminController@newCustomer')->name('adminNewCustomer');
    Route::post('customers/new','AdminController@newCustomerPost')->name('adminNewCustomerPost');
    Route::get('customer/{id}','AdminController@editCustomer')->name('adminEditCustomer');
    Route::post('customer/{id}','AdminController@editCustomerPost')->name('adminEditCustomerPost');
    Route::post('customer/{id}/delete','AdminController@deleteCustomer')->name('adminDeleteCustomer');
 
//=============== Purchases =================
    Route::get('purchases','AdminController@purchases')->name('adminPurchases');
    
});
