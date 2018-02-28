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
	    		'namespace' => 'Origami\Page\Controllers\Admin',
	    		'prefix' => 'page',
	    		'as' => 'page.',
	    	], 
	    	function(){
	    	  
			    Route::get('/' , 			['as' => 'all' ,'uses' => 'PageController@index']);
		    	Route::get('edit/{id}/page',	['as' => 'edit', 'uses' => 'PageController@edit'] );
		    	Route::get('create/page' ,		['as' => 'create', 'uses' => 'PageController@create'] );
		    	Route::post('update/page', 	['as' => 'update' , 'uses' => 'PageController@update']);
		    	Route::post('store/page' ,		['as' => 'store', 'uses' => 'PageController@store']);
		    	Route::post('delete/{id}/page',['as' => 'delete', 'uses' => 'PageController@destroy']);
		    	 
	    	}
	    );
    });
});

