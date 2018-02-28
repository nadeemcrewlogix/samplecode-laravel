<?php

Route::group(['middleware' => 'web'], function () {

	// Subscription Plans Route Group 
    Route::group([	
    	'prefix' => 'admin', 
    	'as' => 'admin.', 
    	],
    function(){
	    // ---Admin Route Group 
	    Route::group([
	    		'namespace' => 'Origami\User\Controllers\Admin',
	    		'prefix' => 'user',
	    		'as' => 'user.',
	    	], 
	    	function(){

	    	   
			    Route::get('/' , 			['as' => 'all' ,'uses' => 'UserController@index']);
			    
			    Route::get('/login' , 		['as' => 'get.login' ,'uses' => 'UserAuthController@getLogin']);
			    Route::post('/login' , 		['as' => 'post.login' ,'uses' => 'UserAuthController@getLogin']);
			    Route::get('/regiser' , 	['as' => 'get.register' ,'uses' => 'UserRegisterController@getRegister']);
			    Route::post('/regiser' , 	['as' => 'post.register' ,'uses' => 'UserRegisterController@getRegister']);
		    	// Route::get('edit/{id}/user',	['as' => 'edit', 'uses' => 'UserController@edit'] );
		    	// Route::get('create/user' ,		['as' => 'create', 'uses' => 'UserController@create'] );
		    	// Route::post('update/user', 	['as' => 'update' , 'uses' => 'UserController@update']);
		    	// Route::post('store/user' ,		['as' => 'store', 'uses' => 'UserController@store']);
		    	// Route::post('delete/{id}/user',['as' => 'delete', 'uses' => 'UserController@destroy']);			    
	    	}
	    );
    });
});

