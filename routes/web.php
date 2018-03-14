<?php

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

Route::get('/', 'Home\IndexController@index')->name('index');
Route::get('/info', 'Home\IndexController@info');
Route::get('Paypal','PaypalController@getCheckout');

//Admin路由群组
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', 'Admin\AdminController@index');
    Route::post('check', 'Admin\AdminController@checkLogin');
});

//Account路由群组
Route::group(['prefix'=>'account'],function(){

    Route::post('check', 'Account\AccountController@checkLogin');

    Route::post('PostBasicsInfo','Account\AccountFormController@PostBasicsInfo')->name('PostBasicsInfo');
    Route::post('postLanguageAbility','Account\AccountFormController@postLanguageAbility')->name('postLanguageAbility');
    Route::post('postEducationBackground','Account\AccountFormController@postEducationBackground')->name('postEducationBackground');
    Route::post('postfamilybackground', 'Account\AccountFormController@postFamilybackground')->name('apply.familybackground');
    Route::post('postContactinformation', 'Account\AccountFormController@postContactinformation')->name('apply.Contactinformation');


    Route::get('/', 'Account\AccountFormController@GetBasicsInfo',function (){})->middleware('auth')->name('apply');
    Route::get('basicInformation', 'Account\AccountFormController@GetBasicsInfo',function (){})->middleware('auth')->name('apply.basicInformation');
    Route::get('languageAbility', 'Account\AccountFormController@GetlanguageAbility',function (){})->middleware('auth')->name('apply.languageAbility');
    Route::get('educationBackground', 'Account\AccountFormController@getEducationBackground',function (){})->middleware('auth')->name('apply.educationBackground');
    Route::get('familyBackground', 'Account\AccountController@familyBackground',function (){})->middleware('auth')->name('apply.familyBackground');
    Route::get('contactInformation', 'Account\AccountFormController@getContactinformation',function (){})->middleware('auth')->name('apply.contactInformation');
    Route::get('uploadDocuments', 'Account\AccountFormController@getuploadDocuments',function (){})->middleware('auth')->name('apply.uploadDocuments');

    //注册
    Route::post('register','Auth\RegisterController@register',function (){})->middleware('SavaPasswordRecord')->name('register.set');
    Route::get('register','Auth\RegisterController@showRegistrationForm',function (){});
    //登录
    Route::get('login','Auth\LoginController@showLoginForm');
    Route::post('login','Auth\LoginController@login');
    //Session
    Route::post('updatefile','Account\AccountFormController@updatefile')->name('updatefile');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/paypal', 'PaypalPaymentController@paywithPaypal',function (){})->middleware('auth')->name('paypal');

Route::get('/payments/success','PaypalPaymentController@ActionSuccess');
Route::get('TestJump','PaypalPaymentController@Jump');
Route::get('test','Account\AccountFormController@test');
Route::get('/payments/fails',function (){
    return "fails";
});
Route::get('/phpinfo','Account\AccountFormController@phpinfo');
