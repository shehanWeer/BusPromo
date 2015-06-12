<?php


Route::get('login','PagesController@login');

Route::get('/','PagesController@home');

Route::get('clients','PagesController@clients');

Route::get('bus_owners','PagesController@bus_owners');

Route::get('advertisers','PagesController@advertisers');

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

