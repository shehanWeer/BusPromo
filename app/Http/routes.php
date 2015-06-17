<?php


Route::get('login','PagesController@login');

Route::get('/','PagesController@home');

Route::get('home','HomeController@index');

Route::get('clients','PagesController@clients');

Route::get('bus_owners','PagesController@bus_owners');

Route::get('advertisers','AdvertiserController@index');

Route::get('agents','PagesController@agents');

Route::get('reports','PagesController@reports');

Route::get('create_report','PagesController@create_report');

Route::get('daily_log','PagesController@daily_log');

Route::get('statistics','PagesController@statistics');

Route::get('advertisements','PagesController@advertisements');

Route::get('about','PagesController@about');

Route::get('users','PagesController@users');

Route::get('routes','PagesController@routes');

Route::get('coaches','PagesController@coaches');

Route::get('settings','PagesController@settings');

Route::get('new_members','PagesController@new_members');

Route::get('transaction_done','PagesController@transaction_done');

Route::get('transaction_pending','PagesController@transaction_pending');

Route::get('transaction_failed','PagesController@transaction_failed');

Route::get('view_routes','PagesController@view_routes');

Route::get('add_route','PagesController@add_route');

Route::get('edit_route','PagesController@edit_route');

Route::get('remove_route','PagesController@remove_route');

Route::get('all_owners','PagesController@all_owners');

Route::get('add_owner','PagesController@add_owner');

Route::get('edit_owner','PagesController@edit_owner');

Route::get('remove_owner','PagesController@remove_owner');

Route::get('view_advertisers','AdvertiserController@show');

Route::get('add_advertiser','PagesController@add_advertiser');

Route::get('submit_advertiser','AdvertiserController@store');

Route::get('edit_advertiser','PagesController@edit_advertiser');

Route::get('remove_advertiser','PagesController@remove_advertiser');

Route::get('user','PagesController@user');

Route::controllers([

    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
?>