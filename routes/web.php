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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Frontend\FrontendController@index');
Route::post('/', 'Frontend\FrontendController@store')->name('contact.store');


Auth::routes();

Route::group(['middleware'=>['auth', 'admin']], function(){
    // Admin Dashboard
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('users')->group(function(){

        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');  
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete', 'Backend\UserController@delete')->name('users.delete');
        
    });
    
    Route::prefix('profiles')->group(function(){
    
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
        
    });
    
    Route::prefix('logos')->group(function(){
    
        Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
        Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
        Route::post('/store', 'Backend\LogoController@store')->name('logos.store');  
        Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
        Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
        Route::post('/delete', 'Backend\LogoController@delete')->name('logos.delete');
        
    });
    
    Route::prefix('sliders')->group(function(){
    
        Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
        Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
        Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');   
        Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
        Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
        Route::post('/delete', 'Backend\SliderController@delete')->name('sliders.delete');
        
    });
       
    Route::prefix('abouts')->group(function(){
    
        Route::get('/view', 'Backend\AboutController@view')->name('abouts.view');
        Route::get('/add', 'Backend\AboutController@add')->name('abouts.add');
        Route::post('/store', 'Backend\AboutController@store')->name('abouts.store'); 
        Route::get('/edit/{id}', 'Backend\AboutController@edit')->name('abouts.edit');
        Route::post('/update/{id}', 'Backend\AboutController@update')->name('abouts.update');
        Route::post('/delete', 'Backend\AboutController@delete')->name('abouts.delete');        
    });

    Route::prefix('services')->group(function(){
    
        Route::get('/view', 'Backend\ServiceController@view')->name('services.view');
        Route::get('/add', 'Backend\ServiceController@add')->name('services.add');
        Route::post('/store', 'Backend\ServiceController@store')->name('services.store'); 
        Route::get('/edit/{id}', 'Backend\ServiceController@edit')->name('services.edit');
        Route::post('/update/{id}', 'Backend\ServiceController@update')->name('services.update');
        Route::post('/delete', 'Backend\ServiceController@delete')->name('services.delete');
        
    });
    
    Route::prefix('portfolios')->group(function(){
    
        Route::get('/view', 'Backend\PortfolioController@view')->name('portfolios.view');
        Route::get('/add', 'Backend\PortfolioController@add')->name('portfolios.add');
        Route::post('/store', 'Backend\PortfolioController@store')->name('portfolios.store'); 
        Route::get('/edit/{id}', 'Backend\PortfolioController@edit')->name('portfolios.edit');
        Route::post('/update/{id}', 'Backend\PortfolioController@update')->name('portfolios.update');
        Route::post('/delete', 'Backend\PortfolioController@delete')->name('portfolios.delete');
        
    });
    
    Route::prefix('clients')->group(function(){
    
        Route::get('/view', 'Backend\ClientController@view')->name('clients.view');
        Route::get('/add', 'Backend\ClientController@add')->name('clients.add');
        Route::post('/store', 'Backend\ClientController@store')->name('clients.store'); 
        Route::get('/edit/{id}', 'Backend\ClientController@edit')->name('clients.edit');
        Route::post('/update/{id}', 'Backend\ClientController@update')->name('clients.update');
        Route::post('/delete', 'Backend\ClientController@delete')->name('clients.delete');
        
    });
    
    Route::prefix('team_titles')->group(function(){
    
        Route::get('/view', 'Backend\TeamTitleController@view')->name('team_titles.view');
        Route::get('/add', 'Backend\TeamTitleController@add')->name('team_titles.add');
        Route::post('/store', 'Backend\TeamTitleController@store')->name('team_titles.store'); 
        Route::get('/edit/{id}', 'Backend\TeamTitleController@edit')->name('team_titles.edit');
        Route::post('/update/{id}', 'Backend\TeamTitleController@update')->name('team_titles.update');
        Route::post('/delete', 'Backend\TeamTitleController@delete')->name('team_titles.delete');
        
    });
    
    Route::prefix('teams')->group(function(){
    
        Route::get('/view', 'Backend\TeamController@view')->name('teams.view');
        Route::get('/add', 'Backend\TeamController@add')->name('teams.add');
        Route::post('/store', 'Backend\TeamController@store')->name('teams.store'); 
        Route::get('/edit/{id}', 'Backend\TeamController@edit')->name('teams.edit');
        Route::post('/update/{id}', 'Backend\TeamController@update')->name('teams.update');
        Route::post('/delete', 'Backend\TeamController@delete')->name('teams.delete');
        
    });
     
    Route::prefix('contacts')->group(function(){
    
        Route::get('/view', 'Backend\ContactController@view')->name('contacts.view');
        Route::get('/add', 'Backend\ContactController@add')->name('contacts.add');
        Route::post('/store', 'Backend\ContactController@store')->name('contacts.store'); 
        Route::get('/edit/{id}', 'Backend\ContactController@edit')->name('contacts.edit');
        Route::post('/update/{id}', 'Backend\ContactController@update')->name('contacts.update');
        Route::post('/delete', 'Backend\ContactController@delete')->name('contacts.delete');

        Route::get('/communicate', 'Backend\ContactController@viewCommunicate')->name('contacts.communicate');
        Route::post('/communicate/delete', 'Backend\ContactController@deleteCommunicate')->name('contacts.communicate.delete');
        
    });
    
});

