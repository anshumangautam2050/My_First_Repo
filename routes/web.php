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

Route::get('/', function () {
    $uid = str_random(10);
    return view('website.home', ['uid' => $uid]);
});
Route::get('/test-popup', function () {
    return view('website.testpopup');
});
Route::get('/algemene-voorwaarden', function () {
    return view('website.voorwaarden');
});
Route::get('/privacy', function () {
    return view('website.privacy');
});
Route::get('/cookies', function () {
    return view('website.cookies');
});
Route::get('/kavel-aanmelden', function () {
    return view('website.kavelform');
});
Route::get('/kavel-aanmelden-succes', function () {
    return view('website.kavelsucces');
});
Route::get('/old-kavel-aanmelden', 'Website\LeadController@page');
Route::post('/kavel-aanmelden', 'Website\LeadController@store');

Auth::routes();

Route::group(['middleware'=>['auth','client']],function(){
    Route::get('/portal', 'HomeController@index');
});

Route::get('admin/optinSubscribe/{id}','mailing_list_subscribersController@optin');
Route::get('admin/subscription', ['as'=> 'admin.mailingListSubscribers.optstatus', 'uses' => 'mailing_list_subscribersController@optstatus']);

Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/admin/home', 'HomeController@index');

    Route::get('admin/users', ['as'=> 'admin.users.index', 'uses' => 'usersController@index']);
    Route::post('admin/users', ['as'=> 'admin.users.store', 'uses' => 'usersController@store']);
    Route::get('admin/users/create', ['as'=> 'admin.users.create', 'uses' => 'usersController@create']);
    Route::put('admin/users/{users}', ['as'=> 'admin.users.update', 'uses' => 'usersController@update']);
    Route::patch('admin/users/{users}', ['as'=> 'admin.users.update', 'uses' => 'usersController@update']);
    Route::delete('admin/users/{users}', ['as'=> 'admin.users.destroy', 'uses' => 'usersController@destroy']);
    Route::get('admin/users/{users}', ['as'=> 'admin.users.show', 'uses' => 'usersController@show']);
    Route::get('admin/users/{users}/edit', ['as'=> 'admin.users.edit', 'uses' => 'usersController@edit']);

    Route::get('admin/leads', ['as'=> 'admin.leads.index', 'uses' => 'leadsController@index']);
    Route::post('admin/leads', ['as'=> 'admin.leads.store', 'uses' => 'leadsController@store']);
    Route::get('admin/leads/create', ['as'=> 'admin.leads.create', 'uses' => 'leadsController@create']);
    Route::put('admin/leads/{leads}', ['as'=> 'admin.leads.update', 'uses' => 'leadsController@update']);
    Route::patch('admin/leads/{leads}', ['as'=> 'admin.leads.update', 'uses' => 'leadsController@update']);
    Route::delete('admin/leads/{leads}', ['as'=> 'admin.leads.destroy', 'uses' => 'leadsController@destroy']);
    Route::get('admin/leads/{leads}', ['as'=> 'admin.leads.show', 'uses' => 'leadsController@show']);
    Route::get('admin/leads/{leads}/edit', ['as'=> 'admin.leads.edit', 'uses' => 'leadsController@edit']);

    Route::get('admin/leadPictures', ['as'=> 'admin.leadPictures.index', 'uses' => 'lead_picturesController@index']);
    Route::post('admin/leadPictures', ['as'=> 'admin.leadPictures.store', 'uses' => 'lead_picturesController@store']);
    Route::get('admin/leadPictures/create', ['as'=> 'admin.leadPictures.create', 'uses' => 'lead_picturesController@create']);
    Route::put('admin/leadPictures/{leadPictures}', ['as'=> 'admin.leadPictures.update', 'uses' => 'lead_picturesController@update']);
    Route::patch('admin/leadPictures/{leadPictures}', ['as'=> 'admin.leadPictures.update', 'uses' => 'lead_picturesController@update']);
    Route::delete('admin/leadPictures/{leadPictures}', ['as'=> 'admin.leadPictures.destroy', 'uses' => 'lead_picturesController@destroy']);
    Route::get('admin/leadPictures/{leadPictures}', ['as'=> 'admin.leadPictures.show', 'uses' => 'lead_picturesController@show']);
    Route::get('admin/leadPictures/{leadPictures}/edit', ['as'=> 'admin.leadPictures.edit', 'uses' => 'lead_picturesController@edit']);

    Route::get('admin/leadTypes', ['as'=> 'admin.leadTypes.index', 'uses' => 'lead_typesController@index']);
    Route::post('admin/leadTypes', ['as'=> 'admin.leadTypes.store', 'uses' => 'lead_typesController@store']);
    Route::get('admin/leadTypes/create', ['as'=> 'admin.leadTypes.create', 'uses' => 'lead_typesController@create']);
    Route::put('admin/leadTypes/{leadTypes}', ['as'=> 'admin.leadTypes.update', 'uses' => 'lead_typesController@update']);
    Route::patch('admin/leadTypes/{leadTypes}', ['as'=> 'admin.leadTypes.update', 'uses' => 'lead_typesController@update']);
    Route::delete('admin/leadTypes/{leadTypes}', ['as'=> 'admin.leadTypes.destroy', 'uses' => 'lead_typesController@destroy']);
    Route::get('admin/leadTypes/{leadTypes}', ['as'=> 'admin.leadTypes.show', 'uses' => 'lead_typesController@show']);
    Route::get('admin/leadTypes/{leadTypes}/edit', ['as'=> 'admin.leadTypes.edit', 'uses' => 'lead_typesController@edit']);
  
    Route::get('admin/mailTemplates', ['as'=> 'admin.mailTemplates.index', 'uses' => 'mail_templatesController@index']);
    Route::post('admin/mailTemplates', ['as'=> 'admin.mailTemplates.store', 'uses' => 'mail_templatesController@store']);
    Route::get('admin/mailTemplates/create', ['as'=> 'admin.mailTemplates.create', 'uses' => 'mail_templatesController@create']);
    Route::put('admin/mailTemplates/{mailTemplates}', ['as'=> 'admin.mailTemplates.update', 'uses' => 'mail_templatesController@update']);
    Route::patch('admin/mailTemplates/{mailTemplates}', ['as'=> 'admin.mailTemplates.update', 'uses' => 'mail_templatesController@update']);
    Route::delete('admin/mailTemplates/{mailTemplates}', ['as'=> 'admin.mailTemplates.destroy', 'uses' => 'mail_templatesController@destroy']);
    Route::get('admin/mailTemplates/{mailTemplates}', ['as'=> 'admin.mailTemplates.show', 'uses' => 'mail_templatesController@show']);
    Route::get('admin/mailTemplates/{mailTemplates}/edit', ['as'=> 'admin.mailTemplates.edit', 'uses' => 'mail_templatesController@edit']);


    Route::get('admin/mailingLists', ['as'=> 'admin.mailingLists.index', 'uses' => 'mailing_listsController@index']);
    Route::post('admin/mailingLists', ['as'=> 'admin.mailingLists.store', 'uses' => 'mailing_listsController@store']);
    Route::get('admin/mailingLists/create', ['as'=> 'admin.mailingLists.create', 'uses' => 'mailing_listsController@create']);
    Route::put('admin/mailingLists/{mailingLists}', ['as'=> 'admin.mailingLists.update', 'uses' => 'mailing_listsController@update']);
    Route::patch('admin/mailingLists/{mailingLists}', ['as'=> 'admin.mailingLists.update', 'uses' => 'mailing_listsController@update']);
    Route::delete('admin/mailingLists/{mailingLists}', ['as'=> 'admin.mailingLists.destroy', 'uses' => 'mailing_listsController@destroy']);
    Route::get('admin/mailingLists/{mailingLists}', ['as'=> 'admin.mailingLists.show', 'uses' => 'mailing_listsController@show']);
    Route::get('admin/mailingLists/{mailingLists}/edit', ['as'=> 'admin.mailingLists.edit', 'uses' => 'mailing_listsController@edit']);


    Route::get('admin/mailingListSubscribers', ['as'=> 'admin.mailingListSubscribers.index', 'uses' => 'mailing_list_subscribersController@index']);
    Route::post('admin/mailingListSubscribers', ['as'=> 'admin.mailingListSubscribers.store', 'uses' => 'mailing_list_subscribersController@store']);
    Route::get('admin/mailingListSubscribers/create', ['as'=> 'admin.mailingListSubscribers.create', 'uses' => 'mailing_list_subscribersController@create']);
    Route::put('admin/mailingListSubscribers/{mailingListSubscribers}', ['as'=> 'admin.mailingListSubscribers.update', 'uses' => 'mailing_list_subscribersController@update']);
    Route::patch('admin/mailingListSubscribers/{mailingListSubscribers}', ['as'=> 'admin.mailingListSubscribers.update', 'uses' => 'mailing_list_subscribersController@update']);
    Route::delete('admin/mailingListSubscribers/{mailingListSubscribers}', ['as'=> 'admin.mailingListSubscribers.destroy', 'uses' => 'mailing_list_subscribersController@destroy']);
    Route::get('admin/mailingListSubscribers/{mailingListSubscribers}', ['as'=> 'admin.mailingListSubscribers.show', 'uses' => 'mailing_list_subscribersController@show']);
    Route::get('admin/mailingListSubscribers/{mailingListSubscribers}/edit', ['as'=> 'admin.mailingListSubscribers.edit', 'uses' => 'mailing_list_subscribersController@edit']);

});



