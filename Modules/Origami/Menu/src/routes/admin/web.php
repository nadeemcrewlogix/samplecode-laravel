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
	    		'namespace' => 'Origami\Menu\Controllers\Admin',
	    		'prefix' => 'menu',
	    		'as' => 'menu.',
	    	], 
	    	function(){
	    	  
			    Route::get('/' , 			['as' => 'all' ,'uses' => 'MenuController@index']);
		    	Route::get('edit/{id}/menu',	['as' => 'edit', 'uses' => 'MenuController@edit'] );
		    	Route::get('create/menu' ,		['as' => 'create', 'uses' => 'MenuController@create'] );
		    	Route::post('update/menu', 	['as' => 'update' , 'uses' => 'MenuController@update']);
		    	Route::post('store/menu' ,		['as' => 'store', 'uses' => 'MenuController@store']);
		    	Route::post('delete/{id}/menu',['as' => 'delete', 'uses' => 'MenuController@destroy']);
		    	 
	    	}
	    );
    });
});

