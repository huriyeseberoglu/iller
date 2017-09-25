<?php
Route::get('/','ListeleController@index');
Route::get('/sehir/{sehir}/ilceler/{ilce}','ListeleController@ilce');
Route::get('/sehir/{sehir}','ListeleController@sehir');
Route::post('/yeni-il',
    array(
    'as' => 'yeni-il',
    'uses' => 'ListeleController@yeniil'
));