<?php

/*
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/
Auth::routes();

// --------------
// CLASSIC ROUTES
// --------------
Route::get('/', function () { 
	return view('welcome'); 
}) ->name('home');
Route::view('/play', 'play')->name('play');
Route::view('/createRaceNameClass', 'characreation/createRaceNameClass')->name('create');
Route::view('/createRaceNameClassValidate', 'characreation/createRaceNameClassValidate')->name('create2');
Route::view('/createSetStats', 'characreation/createSetStats')->name('create3');
Route::view('/createTalents', 'characreation/createTalents')->name('create4');
Route::view('/createAvatar', 'characreation/createAvatar')->name('create5');
Route::view('/createSummary', 'characreation/createSummary')->name('create6');
Route::view('/createBiography', 'characreation/createBio')->name('create7');
Route::view('/previewProfile', 'characreation/preview')->name('previewProfile');
Route::view('/waitingProfile', 'characreation/waiting')->name('waitingProfile');
// MENU
Route::view('/mm_lexicon', 'menu/lexicon')->name('mm_lexicon');
Route::view('/mm_inv', 'menu/inv')->name('mm_inv');
Route::view('/mm_map', 'menu/map')->name('mm_map');
Route::view('/mm_config', 'menu/config')->name('mm_config');
Route::view('/mm_logout', 'menu/logout')->name('mm_logout');
Route::get('/logout', 'Auth\LoginController@logout');

// --------------
// DATABASE SENDS
// --------------
Route::get('launchcharacreation', 'CharSend@launchcharacreation')->name('launchcharacreation');
Route::get('/sendname', 'CharSend@sendName')->name('sendname');
Route::get('/sendclass', 'CharSend@sendClass')->name('sendclass');
Route::get('/sendrace', 'CharSend@sendRace')->name('sendrace');
Route::get('/sendstats', 'CharSend@sendStats')->name('sendstats');
Route::get('/sendavatar', 'CharSend@sendAvatar')->name('sendavatar');
Route::get('/sendfirsttraits', 'CharSend@sendFirstTraits')->name('sendfirsttraits');
Route::get('/confirmcharacter', 'CharSend@confirmCharacter')->name('confirmcharacter');
Route::get('/deletecharacter', 'CharSend@deleteCharacter')->name('deletecharacter');
Route::get('/sendProfile', 'MessageSend@sendProfile')->name('sendProfile');
// Inventory actions
Route::post('/equipitm', 'AjaxController@equipitm')->name('equipitm');
Route::post('/unequipitm', 'AjaxController@unequipitm')->name('unequipitm');
Route::post('/discarditm', 'AjaxController@discarditm')->name('discarditm');
Route::post('/useitm', 'AjaxController@useitm')->name('useitm');

// --------------
//      AJAX
// --------------
    // GET
	Route::view('races', 'characreation/child/races')->name('races');
	Route::view('classes', 'characreation/child/classes')->name('classes');
	Route::get('getStats', 'AjaxController@getStats')->name('getStats');
	Route::get('/getProfile', 'MessageSend@getProfile')->name('getProfile');
	Route::get('translateStat', 'AjaxController@translateStat')->name('translateStat');
	Route::get('getTab', 'AjaxController@getTab')->name('getTab');
	Route::get('removeTab', 'AjaxController@removeTab')->name('removeTab');
	// POST
	Route::post('/pushProfile','MessageSend@pushProfile')->name('pushProfile');

// --------------
//      ADMIN
// --------------
Route::prefix('admin')->group(function() {
	//basic login + home
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::view('/home', 'admin/admin-home')->name('admin-home');
    //edition actions
	Route::group(['middleware' => ['web']], function () {
		Route::post('/editChar','AdminController@editChar')->name('editChar');
		Route::post('/editItem','AdminController@editItem')->name('editItem');
		Route::post('/postItmActions', 'AdminController@postItemActions')->name('postItmActions');
		Route::get('/makeNewItem', 'AdminController@makeNewItm')->name('makeNewItem');
		Route::post('/deleteItm', 'AdminController@deleteItem')->name('deleteItm');
		Route::post('/makeNewLexicon', 'AdminController@makeNewLex')->name('makeNewLexicon');
		Route::post('/editLexicon', 'AdminController@editLex')->name('editLexicon');
		Route::post('/toggleEquip', 'AdminController@toggleEquip')->name('toggleEquip');
		Route::post('/replaceEquip', 'AdminController@replaceEquip')->name('replaceEquip');
		Route::post('/deleteInvItm', 'AdminController@delInvItm')->name('deleteInvItm');
		Route::post('/addInvItm', 'AdminController@addInvItm')->name('addInvItm');
	});
	Route::get('/adminDel', 'AdminController@deleteUser')->name('adminDel');
	Route::get('/getItm', 'AdminController@getItem')->name('getItm');
	Route::get('/getItmActions', 'AdminController@getItemActions')->name('getItmActions');
	//profiles
	Route::get('/valProf', 'AdminController@validateProfile')->name('valProf');
	Route::get('/comProf', 'AdminController@commentProfile')->name('comProf');
	Route::get('/decProf', 'AdminController@declineProfile')->name('decProf');
	// icons
	Route::get('/getIcons',  'AdminController@getIcons')->name('getIcons');
    //admin ajax modules
	Route::view('/profVal',  'admin/ajax/modules/profile_validation')->name('admin.mod.prof_val');
	Route::view('/lastChar',  'admin/ajax/modules/last_character')->name('admin.mod.last_char');
	Route::post('/profValUI',  'AdminController@mod_profValUI')->name('admin.mod.profValUI');
	//admin menu
	Route::view('/m_home',  'admin/section/home')->name('m_home');
	Route::view('/m_mess',  'admin/section/messages')->name('m_mess');
	Route::view('/m_char',  'admin/section/personnages')->name('m_char');
	Route::view('/m_item',  'admin/section/objets')->name('m_item');
		Route::view('/m_item_list',  'admin/ajax/objets_ajax')->name('m_item_list');
		Route::view('/m_item_new',  'admin/ajax/objets_new')->name('m_item_new');
	Route::view('/m_maps',  'admin/section/carte')->name('m_maps');
	Route::view('/m_univ',  'admin/section/univers')->name('m_univ');
		Route::view('/m_lexicon_list',  'admin/ajax/univ_ajax')->name('m_lexicon_list');
		Route::view('/m_lexicon_new',  'admin/ajax/univ_new')->name('m_lexicon_new');
	Route::view('/m_grap',  'admin/section/graphismes')->name('m_grap');
	Route::view('/m_note',  'admin/section/notes')->name('m_note');
	Route::view('/m_mode',  'admin/section/moderation')->name('m_mode');
	Route::view('/m_acce',  'admin/section/acces')->name('m_acce');
	Route::view('/m_conf',  'admin/section/config')->name('m_conf');
	Route::view('/m_inbo',  'admin/section/courrier')->name('m_inbo');
});

// --------------
//      QUERIES
// --------------
Route::get('/getItmBySubType', 'AdminController@getItemsBySubtype')->name('getItmBySubType');
Route::post('/getItmByName', 'AdminController@getItemsByName')->name('getItmByName');
Route::post('/listItmByName', 'AdminController@listItemsByName')->name('listItmByName');
Route::get('/getAllItms', 'AdminController@getAllItms')->name('getAllItms');
Route::get('/getEquiById', 'AdminController@getEquiById')->name('getEquiById');
Route::get('/getLexById', 'AdminController@getLexById')->name('getLexById');
Route::get('/getInvById', 'AdminController@getInvById')->name('getInvById');
Route::post('/getLexByName', 'AdminController@getLexByName')->name('getLexByName');
Route::get('/getLexByType', 'AdminController@getLexByType')->name('getLexByType');
Route::get('/getAllLexs', 'AdminController@getAllLexs')->name('getAllLexs');