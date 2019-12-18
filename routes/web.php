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
//------------------Frontend Controller --------------------------------

route::get('/', 'FrontendController@index');
route::get('/index/home1', 'FrontendController@home1');
route::get('/index/home2', 'FrontendController@home2');
route::get('/index/home3', 'FrontendController@home3');
route::get('/index/home4', 'FrontendController@home4');
route::get('/index/presidentinfo', 'FrontendController@presidentinfo');
route::get('/index/whoweare', 'FrontendController@whoweare');
route::get('/index/workingcommittee', 'FrontendController@workingcommittee');
route::get('/index/technicalmember', 'FrontendController@technicalmember');
route::get('/index/testimonial', 'FrontendController@testimonial');
route::get('/index/clubsANDteams', 'FrontendController@clubsANDteams');
route::get('/index/contact', 'FrontendController@contact');
route::get('/index/eventschedule', 'FrontendController@eventschedule');


Auth::routes();
//------------------Home Controller --------------------------------
Route::get('/home', 'HomeController@index')->name('home');
//----------------------------Working Committee Part-------------------------------
route::get('/add/workingcommittee' , 'HomeController@addworkingcommittee');
route::get('/table/workingcommittee' , 'HomeController@tableworkingcommittee');
route::post('/workingcommittee/insert', 'HomeController@workingcommitteeinsert');
route::get('/workingcommittee/edit/{workingcommittee_id}', 'HomeController@workingcommitteeedit');
route::get('/workingcommittee/delete/{workingcommittee_id}', 'HomeController@workingcommitteedelete');
route::post('/workingcommittee/update', 'HomeController@workingcommitteeupdate');

//-----------------------------Technical Member Part--------------------------------------------------------
route::get('/add/technicalmember' , 'HomeController@addtechnicalmember');
route::get('/table/technicalmember' , 'HomeController@tabletechnicalmember');
route::post('/technicalmember/insert', 'HomeController@technicalmemberinsert');
route::get('/technicalmember/edit/{technicalmember_id}', 'HomeController@technicalmemberedit');
route::get('/technicalmember/delete/{technicalmember_id}', 'HomeController@technicalmemberdelete');
route::post('/technicalmember/update', 'HomeController@technicalmemberupdate');

//------------------------Mainslider Controller-----------------------------
route::get('/add/mainslider', 'MainsliderController@addmainslider');
route::post('/mainslider/insert', 'MainsliderController@mainsliderinsert');
route::get('/mainslider/viewtable', 'MainsliderController@mainsliderviewtable');
route::get('/mainslider/delete/{mainslider_id}', 'MainsliderController@mainsliderdelete');
route::get('/mainslider/edit/{mainslider_id}', 'MainsliderController@mainslideredit');
route::post('/mainslider/update', 'MainsliderController@mainsliderupdate');
route::get('/mainslider/restore/{mainslider_id}', 'MainsliderController@mainsliderrestore');

//--------------------------Testimonial Part--------------------------------------
//--------------------------Start Testimonial One------------------------------
route::get('/add/testimonialone' , 'TestimonialController@addtestimonialone');
route::get('/table/testimonialone' , 'TestimonialController@tabletestimonialone');
route::post('/testimonialone/insert', 'TestimonialController@testimonialoneinsert');
route::get('/testimonialone/edit/{testimonialone_id}', 'TestimonialController@testimonialoneedit');
route::get('/testimonialone/delete/{testimonialone_id}', 'TestimonialController@testimonialonedelete');
route::post('/testimonialone/update', 'TestimonialController@testimonialoneupdate');

//--------------------------End Testimonial One------------------------------


//--------------------------Start Testimonial Two------------------------------

route::get('/add/testimonialtwo' , 'TestimonialController@addtestimonialtwo');
route::get('/table/testimonialtwo' , 'TestimonialController@tabletestimonialtwo');
route::post('/testimonialtwo/insert', 'TestimonialController@testimonialtwoinsert');
route::get('/testimonialtwo/edit/{testimonialtwo_id}', 'TestimonialController@testimonialtwoedit');
route::get('/testimonialtwo/delete/{testimonialtwo_id}', 'TestimonialController@testimonialtwodelete');
route::post('/testimonialtwo/update', 'TestimonialController@testimonialtwoupdate');

//--------------------------End Testimonial Two------------------------------

//---------------------------Clubs And Teams Part ------------------------------
route::get('/add/clubsANDteams' , 'HomeController@addclubsANDteams');
route::get('/table/clubsANDteams' , 'HomeController@tableclubsANDteams');
route::post('/clubsANDteams/insert', 'HomeController@clubsANDteamsinsert');
route::get('/clubsANDteams/edit/{clubsANDteams_id}', 'HomeController@clubsANDteamsedit');
route::get('/clubsANDteams/delete/{clubsANDteams_id}', 'HomeController@clubsANDteamsdelete');
route::post('/clubsANDteams/update', 'HomeController@clubsANDteamsupdate');

//-------------------------- End Clubs And Teams Part ------------------------------

//---------------------------Clubs And Teams Part2 ------------------------------
route::get('/add/clubsANDteamstwo' , 'HomeController@addclubsANDteamstwo');
route::get('/table/clubsANDteamstwo' , 'HomeController@tableclubsANDteamstwo');
route::post('/clubsANDteamstwo/insert', 'HomeController@clubsANDteamstwoinsert');
route::get('/clubsANDteamstwo/edit/{clubsANDteamstwo_id}', 'HomeController@clubsANDteamstwoedit');
route::get('/clubsANDteamstwo/delete/{clubsANDteamstwo_id}', 'HomeController@clubsANDteamstwodelete');
route::post('/clubsANDteamstwo/update', 'HomeController@clubsANDteamstwoupdate');

//-------------------------- End Clubs And Teams Part2 ------------------------------
//---------------------------Clubs And Teams Part3 ------------------------------
route::get('/add/clubsANDteamsthree' , 'HomeController@addclubsANDteamsthree');
route::get('/table/clubsANDteamsthree' , 'HomeController@tableclubsANDteamsthree');
route::post('/clubsANDteamsthree/insert', 'HomeController@clubsANDteamsthreeinsert');
route::get('/clubsANDteamsthree/edit/{clubsANDteamsthree_id}', 'HomeController@clubsANDteamsthreeedit');
route::get('/clubsANDteamsthree/delete/{clubsANDteamsthree_id}', 'HomeController@clubsANDteamsthreedelete');
route::post('/clubsANDteamsthree/update', 'HomeController@clubsANDteamsthreeupdate');

//-------------------------- End Clubs And Teams Part3 ------------------------------

//-------------------------------IndexController----------------------------------------------
//------------------------- Start Index page Current Events -----------------------------------
route::get('/add/indexcurrentevent' , 'IndexController@addindexcurrentevent');
route::get('/table/indexcurrentevent' , 'IndexController@tableindexcurrentevent');
route::post('/indexcurrentevent/insert', 'IndexController@indexcurrenteventinsert');
route::get('/indexcurrentevent/edit/{indexcurrentevent_id}', 'IndexController@indexcurrenteventedit');
route::get('/indexcurrentevent/delete/{indexcurrentevent_id}', 'IndexController@indexcurrenteventdelete');
route::post('/indexcurrentevent/update', 'IndexController@indexcurrenteventupdate');
//-------------------------End Index page Current Events -----------------------------------

//------------------------- Start Index page Current Events -----------------------------------
route::get('/add/indexnextevent' , 'IndexController@addindexnextevent');
route::get('/table/indexnextevent' , 'IndexController@tableindexnextevent');
route::post('/indexnextevent/insert', 'IndexController@indexnexteventinsert');
route::get('/indexnextevent/edit/{indexnextevent_id}', 'IndexController@indexnexteventedit');
route::get('/indexnextevent/delete/{indexnextevent_id}', 'IndexController@indexnexteventdelete');
route::post('/indexnextevent/update', 'IndexController@indexnexteventupdate');
//-------------------------End Index page Current Events -----------------------------------

//------------------------- Start Index page President Info -----------------------------------
route::get('/add/presidentinfo' , 'IndexController@addpresidentinfo');
route::get('/table/presidentinfo' , 'IndexController@tablepresidentinfo');
route::post('/presidentinfo/insert', 'IndexController@presidentinfoinsert');
route::get('/presidentinfo/edit/{presidentinfo_id}', 'IndexController@presidentinfoedit');
route::get('/presidentinfo/delete/{presidentinfo_id}', 'IndexController@presidentinfodelete');
route::post('/presidentinfo/update', 'IndexController@presidentinfoupdate');
//-------------------------End Index page President Info -----------------------------------

//------------------------- Start Index Secretary Info -----------------------------------
route::get('/add/secretary' , 'IndexController@addsecretary');
route::get('/table/secretary' , 'IndexController@tablesecretary');
route::post('/secretary/insert', 'IndexController@secretaryinsert');
route::get('/secretary/edit/{secretary_id}', 'IndexController@secretaryedit');
route::get('/secretary/delete/{secretary_id}', 'IndexController@secretarydelete');
route::post('/secretary/update', 'IndexController@secretaryupdate');
//-------------------------End Index page Secretary Info -----------------------------------

//------------------------- Start Index page: Awesomeservice Left Start -----------------------------------
route::get('/add/awesomeserviceleft' , 'IndexController@addawesomeserviceleft');
route::get('/table/awesomeserviceleft' , 'IndexController@tableawesomeserviceleft');
route::post('/awesomeserviceleft/insert', 'IndexController@awesomeserviceleftinsert');
route::get('/awesomeserviceleft/edit/{awesomeserviceleft_id}', 'IndexController@awesomeserviceleftedit');
route::get('/awesomeserviceleft/delete/{awesomeserviceleft_id}', 'IndexController@awesomeserviceleftdelete');
route::post('/awesomeserviceleft/update', 'IndexController@awesomeserviceleftupdate');
route::get('/awesomeserviceleft/restore/{awesomeserviceleft_id}', 'IndexController@awesomeserviceleftrestore');
//-------------------------End Index page: Awesomeservice Left -------------------------------

//------------------------- Start Index page: Awesomeservice Right Start -----------------------------------
route::get('/add/awesomeserviceright' , 'IndexController@addawesomeserviceright');
route::get('/table/awesomeserviceright' , 'IndexController@tableawesomeserviceright');
route::post('/awesomeserviceright/insert', 'IndexController@awesomeservicerightinsert');
route::get('/awesomeserviceright/edit/{awesomeserviceright_id}', 'IndexController@awesomeservicerightedit');
route::get('/awesomeserviceright/delete/{awesomeserviceright_id}', 'IndexController@awesomeservicerightdelete');
route::post('/awesomeserviceright/update', 'IndexController@awesomeservicerightupdate');
route::get('/awesomeserviceright/restore/{awesomeserviceright_id}', 'IndexController@awesomeservicerightrestore');

//-------------------------End Index page: Awesomeservice Right -------------------------------

//------------------------- Start Contact page -----------------------------------
// route::get('/add/indexcommittee' , 'IndexController@addindexcommittee');
route::post('/contact/insert', 'IndexController@contactinsert');
route::get('/table/contact' , 'IndexController@tablecontact');
// route::get('/indexcommittee/edit/{indexcommittee_id}', 'IndexController@indexcommitteeedit');
route::get('/contact/delete/{contact_id}', 'IndexController@contactdelete');
// route::post('/indexcommittee/update', 'IndexController@indexcommitteeupdate');
//-------------------------End Contact page-----------------------------------
