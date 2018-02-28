# Crewlogix Event Manager Package

#### For Admin Portal  Add this in composer.json

``` composer 
"require" : {
    "crewlogix/event_manager": "0.1.*"
},
"repositories": [ 
        { 
            "type": "package", 
            "package": 
            { 
                "name": "crewlogix/event_manager", 
                "version": "0.1.2", 
                "source": { 
                    "url": "https://nadeem_crewlogix@bitbucket.org/origamistudioslaravel/event_manager.git",
                    "type": "git", 
                    "reference": "master"    
                }
            } 
        }
],
"autoload" : {
	"psr-4" : {
		"Crewlogix\\EventManager\\": "vendor/crewlogix/event_manager/src"
	}
},
```

#### Add  Admin Service Provider in config/app.php  

    Crewlogix\EventManager\Providers\AdminServiceProvider::class,


#### Run Artisan Commands  For Admin Portal  

``` php
php artisan vendor:publish --force
php artisan migrate
```




#### For Consultant Portal  Add this in composer.json

``` composer 
"require" : {
    "crewlogix/event_manager": "0.1.*",
    "bestmomo/filemanager": "1.1.*",
},
"repositories": [ 
        { 
            "type": "package", 
            "package": 
            { 
                "name": "crewlogix/event_manager", 
                "version": "0.1.2", 
                "source": { 
                    "url": "https://nadeem_crewlogix@bitbucket.org/origamistudioslaravel/event_manager.git",
                    "type": "git", 
                    "reference": "master"    
                }
            } 
        }
],
"autoload" : {
    "psr-4" : {
        "Crewlogix\\EventManager\\": "vendor/crewlogix/event_manager/src"
    }
},
```

#### Add  Consultant Service Provider in config/app.php  

    Crewlogix\EventManager\Providers\ConsultantServiceProvider::class,


#### Run Artisan Commands  For Consultant Portal  

``` php
php artisan cacahe:clear 
php artisan vendor:publish --force
```




#### For Student Portal  Add this in composer.json

``` composer 
"require" : {
    "crewlogix/event_manager": "0.1.*"
},
"repositories": [ 
        { 
            "type": "package", 
            "package": 
            { 
                "name": "crewlogix/event_manager", 
                "version": "0.1.2", 
                "source": { 
                    "url": "https://nadeem_crewlogix@bitbucket.org/origamistudioslaravel/event_manager.git",
                    "type": "git", 
                    "reference": "master"    
                }
            } 
        }
],
"autoload" : {
    "psr-4" : {
        "Crewlogix\\EventManager\\": "vendor/crewlogix/event_manager/src"
    }
},
```

#### Add  Student Service Provider in config/app.php  

    Crewlogix\EventManager\Providers\StudentServiceProvider::class,


#### Run Artisan Commands  For Student Portal  

``` php
php artisan cacahe:clear 
php artisan vendor:publish --force
```






