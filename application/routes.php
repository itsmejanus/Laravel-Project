<?php
Route::get('/', array('uses' => 'home@index'));
Route::get('home', array('uses' => 'home@index'));
Route::get('overview', array('uses' => 'home@overview'));
Route::get('allmessages', array('uses' => 'home@allmessages'));
Route::post('messagepaging', array('uses' => 'home@messagepaging'));
Route::post('changemessagestatus', array('uses' => 'home@changemessagestatus'));
Route::post('send_reply', array('uses' => 'home@send_reply'));
Route::post('connectphysician', array('uses' => 'home@connectphysician'));
Route::post('newmessages', array('uses' => 'home@newmessages'));
Route::post('connectedphyscians', array('uses' => 'home@connectedphyscians'));
Route::post('faveddocs', array('uses' => 'home@faveddocs'));
Route::post('docsnearhome', array('uses' => 'home@docsnearhome'));
Route::post('docsdesired', array('uses' => 'home@docsdesired'));
Route::post('docsvisited', array('uses' => 'home@docsvisited'));
Route::post('requestconnection', array('uses' => 'home@requestconnection'));
Route::get('login', array('as'=> 'login', 'uses' => 'account@login'));
Route::post('login', array('as'=> 'login', 'uses' => 'account@login'));
Route::get('signup', array('uses' => 'account@signup'));
Route::post('signup', array('uses' => 'account@signup'));
Route::get('logout', array('as'=> 'login', 'uses' => 'account@logout'));
Route::get('testpage', array('uses' => 'testct@testdata'));
Route::post('activity', array('uses' => 'testct@deletejob'));

Route::get('reset', array('uses' => 'account@resetpassword'));
Route::post('reset', array('uses' => 'account@resetpassword'));

Route::post('changepassword', array('uses' => 'account@changepassword'));

Route::get('reset_confirm', array('uses' => 'account@resetpassword_confirm'));
Route::post('reset_confirm', array('uses' => 'account@resetpassword_confirm'));
Route::get('updateprofile', array('uses' => 'account@updateprofile'));
Route::post('updateprofile', array('uses' => 'account@updateprofile'));
//Route::get('map/(:any)', array('as' => 'group','uses' => 'admin@createmap'));
Route::get('map', array('uses' => 'admin@createmap'));
Route::post('map', array('uses' => 'admin@searchmap'));
Route::post('hospitaleditable', array('uses' => 'admin@hospitaleditable'));
Route::post('hospitalsave', array('uses' => 'admin@hospitalsave'));

Route::get('adminsearch', array('uses' => 'search@createsearchview'));
Route::post('adminsearch', array('uses' => 'search@searchresults'));

Route::get('userdata', array('uses' => 'admin@userdata'));
Route::post('userdata', array('uses' => 'admin@userdata'));

Route::post('emailcontent', array('uses' => 'admin@emailcontent'));

Route::get('hospitaldetail', array('uses' => 'hospital@hospitaldetail'));
Route::post('hospitaldetail', array('uses' => 'hospital@hospitaldetail'));
Route::get('hospitalsearch', array('uses' => 'hospital@search'));
Route::post('search', array('uses' => 'hospital@search'));
Route::get('userprofile/(:any)', array('as' => 'group','uses' => 'account@userprofile'));

Route::get('adminmanagement', array('as' => 'group','uses' => 'admin@adminmanagement'));
Route::post('adminmanagement', array('as' => 'group','uses' => 'admin@adminmanagement'));
Route::post('managementdetail', array('as' => 'group','uses' => 'admin@managementdetail'));
Route::post('updatehospitalrelationship', array('as' => 'group','uses' => 'admin@updatehospitalrelationship'));
Route::post('savecomment', array('as' => 'group','uses' => 'admin@savecomment'));

Route::get('hospitalprofile/(:any)', array('as' => 'group','uses' => 'hospital@hospitalprofile'));
Route::post('addcomment', array('uses' => 'hospital@addcomment'));
Route::post('addfavorites', array('uses' => 'hospital@addfavorites'));

Route::post('search_list', array('as' => 'group','uses' => 'admin@search_list'));

Route::post('jobsave', array('as' => 'group','uses' => 'admin@jobsave'));

Route::post('emaillist', array('as' => 'group','uses' => 'admin@emaillist'));

Route::post('savefields', array('as' => 'group','uses' => 'admin@savefields'));

Route::get('hospitals', array('as' => 'group','uses' => 'hospital@hospitals'));
Route::post('likedhospitals', array('as' => 'group','uses' => 'hospital@likedhospitals'));
Route::post('connectedhospitals', array('as' => 'group','uses' => 'hospital@connectedhospitals'));
Route::post('recommendedhospitals', array('as' => 'group','uses' => 'hospital@recommendedhospitals'));


Route::post('savepopup', array('as' => 'group','uses' => 'admin@savepopup'));

Route::post('connecthospital', array('as' => 'group','uses' => 'hospital@connecthospital'));

Route::post('removehospital', array('as' => 'group','uses' => 'hospital@removehospital'));

Route::get('myconnections', array('as' => 'group','uses' => 'connection@myconnections'));
Route::post('myconnections', array('as' => 'group','uses' => 'connection@myconnections'));
Route::post('ajaxconnection', array('as' => 'group','uses' => 'connection@ajaxconnection'));

Route::post('setconnection', array('as' => 'group','uses' => 'miscdata@setconnection'));

Route::get('rewrite', array('as' => 'group','uses' => 'hospital@rewrite'));
Route::post('jobdata', array('as' => 'group','uses' => 'hospital@jobdata'));
Route::post('savejobdata', array('as' => 'group','uses' => 'hospital@savejobdata'));


Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

Route::filter('remember', function()
{
    if(Input::get('login'))
    {
        Session::put('login_redirect', URI::current());
    }
});

Route::filter('before', function()
{
    if(Input::get('login'))
    {
        $valid_login = Sentry::login(Input::get('login'), Input::get('password'), true);
        if ($valid_login)
        {
        }
        else
        {
            return Redirect::to('login');
        }
    }
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	    if ( ! Sentry::check())
    {
        Session::put('login_redirect', URI::current());
        return Redirect::to('login');
    }
});

