<?php
/**
 * Routes for : Course
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
	
	Route::group( ['namespace' => 'Course'], function () {
	    Route::get('courses', 'CoursesController@index')->name('courses.index');
	    Route::get('courses/create', 'CoursesController@create')->name('courses.create');
	    Route::post('courses', 'CoursesController@store')->name('courses.store');
	    Route::get('courses/{course}/edit', 'CoursesController@edit')->name('courses.edit');
	    Route::patch('courses/{course}', 'CoursesController@update')->name('courses.update');
	    
	    //For Datatable
	    Route::post('courses/get', 'CoursesTableController')->name('courses.get');
	});
	
});