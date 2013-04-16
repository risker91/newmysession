<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Asia/Yekaterinburg');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Cookie::$salt = 'dsfsdfsdf856ugffghfgheyfghdfg456';
Kohana::init(array(
	'base_url'   => '/',
        'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);


/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'email'      => MODPATH.'email',      // работра с почтой
        'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('страница студента', 'classmate<classmate>',
        array('classmate'=>'\d+'))
	->defaults(array(
		
		'controller' => 'classmate',
		'action'     => 'profile',
	));


Route::set('нука универсальный роут', 'group<group>/elder/GenerateInvite',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'elder',
		'action'     => 'GenerateInvite',
	));


Route::set('добавления вопросов к предмету', 'group<group>/elder/addquestions',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'elder',
		'action'     => 'addquestions',
	));


Route::set('вопрос с ответами', 'group<group>/session/question/<quest>',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'sess',
		'action'     => 'question',
	));




Route::set('подтвердить группу', 'acceptgroup/<reggroup>')
	->defaults(array(
		
		'controller' => 'adminius',
		'action'     => 'acceptgroup',
	));

Route::set('админ-панель->заявки', 'adminius/Apps')
	->defaults(array(
		
		'controller' => 'adminius',
		'action'     => 'Apps',
	));



Route::set('админ-панель', 'adminius')
	->defaults(array(
		
		'controller' => 'adminius',
		'action'     => 'index',
	));


Route::set('подача заявки на добавление группы', 'reggroup')
	->defaults(array(
		
		'controller' => 'zayavka',
		'action'     => 'addzayavka',
	));




Route::set('добавление одногрупников', 'group<group>/elder/addclassmates',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'elder',
		'action'     => 'ClassmatesAdd',
	));


Route::set('добавление предметов', 'group<group>/elder/additem',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'elder',
		'action'     => 'AddItem',
	));


Route::set('добавление результатов', 'group<group>/elder/addresults',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'elder',
		'action'     => 'AddResults',
	));

Route::set('список одногрупников в панеле старосты', 'group<group>/elder/listcm',
         array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'elder',
		'action'     => 'viewcm',
	));


Route::set('error', 'error/<error>')
	->defaults(array(
		
		'controller' => 'errors',
		'action'     => 'index',
	));


Route::set('панель старосты', 'group<group>/elder', 
        array('group'=>'\d+'))
	->defaults(array(		
		'controller' => 'elder',
		'action'     => 'index',
	));





Route::set('список одногрупников', 'group<group>/classmates',
        array('group'=>'\d+'))
	->defaults(array(
		
		'controller' => 'group',
		'action'     => 'index',
	));


Route::set('выход', 'exit')
	->defaults(array(
		
		'controller' => 'auth',
		'action'     => 'out',
	));





	Route::set('главная страница группы','group<group>' ,
        array('group'=>'\d+'))   //Это нужно чтобы в айди попадали только цифры  array('id'=>'\d+')
              
                ->defaults(array(
                       'controller'=>'risk', 
                      'action'=>'index'
                ));







Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));