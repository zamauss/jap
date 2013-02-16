<?php
if(dirname(__FILE__) == '/Users/rzamarripa/Dropbox/sites/htdocs/jap/protected/config')
	$dbString = '72.3.204.215';
else
	$dbString = 'mysql51-019.wc2.dfw1.stabletransit.com';

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'JAP Sinaloa',
	'language'=>'es',
	'sourceLanguage'=>'es',
	

	// preloading 'log' component
	'preload'=>array(
		'log',
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.bootstrap-theme.widgets.*',
    	'ext.bootstrap-theme.helpers.*',
    	'ext.bootstrap-theme.behaviors.*',
	),	

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
		'gii'=>array(
		      'class'=>'system.gii.GiiModule',
		      'password'=>'123qwe',
		      // If removed, Gii defaults to localhost only. Edit carefully to taste.
		      'ipFilters'=>array('*.*.*.*','::1'),
		      'generatorPaths'=>array('ext.bootstrap-theme.gii',),
		      
		    ),
	),

	// application components
	'components'=>array(
		
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
				
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=' . $dbString . ';dbname=517226_sistemajap',
			'emulatePrepare' => true,
			'username' => '517226_sistemaj',
			'password' => 'Zamarripa83',
			'charset' => 'utf8',
		),
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=mysql51-019.wc2.dfw1.stabletransit.com;dbname=517226_sistemajap',
			'emulatePrepare' => true,
			'username' => '517226_sistemaj',
			'password' => 'Zamarripa83',
			'charset' => 'utf8',
		),
		*/
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;dbname=jap',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
				array(
			            'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
			            'ipFilters'=>array('127.0.0.1'),
			        ),
			),
		),
	),	
	'theme'=>'bootstrap',
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'rzamarripa@uss.mx',
	),
);
