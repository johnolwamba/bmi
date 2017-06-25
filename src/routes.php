<?php
Route::group(['namespace' => 'John\BMI\Controllers', 'prefix' => 'john/bmi'], function () {
    Route::get('/', ['as' => 'bmi_path', 'uses' => 'BMIController@index']);
});