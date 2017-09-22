
<?php
Route::get('/','ListeleController@index');
Route::get('/sehir/{sehir}','ListeleController@sehir');
Route::get('/sehir/{sehir}/ilceler/{ilce}','ListeleController@ilce');
