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
    return view('home');
});


  Route::get('/home', 'HomeController@index')->name('home');
  
  //skills
  
  Route::get('/skills', 'Skill\SkillController@index')->name('skills');
  Route::post('skills/storage','Skill\SkillController@store')
  ->name('skills/storage');
  
  Route::get('skills/getSkills','Skill\SkillController@getSkills')->name('skills/getSkills');

  Route::get('personal/register','Personal\PersonalController@index')
  ->name('personal');

  Route::get('personal/show','Personal\PersonalController@view_show')->name('personal/show');
  

  
  /******          SAVE   employee     ***************/
  Route::post('personal/storage','Personal\PersonalController@store')
  ->name('personal/storage');

  //consult employee
  Route::post('personal/search','Personal\PersonalController@Search')->name('personal/search');



  Route::post('personal/detail','Personal\PersonalController@getDetails')->name('personal/detail');






