<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainslider;
use App\Presidentinfo;
use App\Secretary;
use App\Technicalmember;
use App\Testimonialone;
use App\Testimonialtwo;
use App\Testimonialthree;
use App\ClubsANDteams;
use App\ClubsANDteamstwo;
use App\ClubsANDteamsthree;
use App\Indexcurrentevent;
use App\Indexnextevent;
use App\Workingcommittee;
use App\Contact;
use App\Awesomeserviceleft;
use App\Awesomeserviceright;
use App\Eventschedule;
use Carbon\Carbon;
use Image;

class FrontendController extends Controller
{
  //------------------------Index Function for Index.blade.php Page---------------------//
    function index(){
       // $eventschedules = Eventschedule::all()->last();
       $awesomeservicerights = Awesomeserviceright::latest()->take(3)->get();
       $awesomeservicelefts = Awesomeserviceleft::latest()->take(3)->get();
       $presidentinfos = Presidentinfo::latest()->take(1)->get();
       $secretaries = Secretary::latest()->take(1)->get();
       $indexnextevents = Indexnextevent::all();
       $indexcurrentevents = Indexcurrentevent::all()->last();
       $mainsliders = Mainslider::all();
       return view('index/index', compact('mainsliders', 'indexcurrentevents', 'indexnextevents','presidentinfos','awesomeservicelefts', 'awesomeservicerights', 'eventschedules','secretaries'));
       // print_r($indexnextevents);
    }
  //------------------------------------------------------------------------------------//
function eventschedule(){
   return view('/index/eventschedule');
}
function workingcommittee(){
  $workingcommittees = Workingcommittee::all();
   return view('/index/workingcommittee', compact('workingcommittees'));
}

  //------------------------------------------------------------------------------------//
    function home1(){
      return view('index/home1');
    }
    function home2(){
      return view('index/home2');
    }
    function home3(){
      return view('index/home3');
    }
    function home4(){
      return view('index/home4');
    }

    function presidentinfo(){
      $presidentinfos = Presidentinfo::all();
      return view('index/presidentinfo', compact('presidentinfos'));
    }
    function whoweare(){
      return view('index/whoweare');
    }
    function technicalmember(){
      $technicalmembers = Technicalmember::all();
      return view('index/technicalmember', compact('technicalmembers'));
    }

    function testimonial(){
      $testimonialones = Testimonialone::all();
      $testimonialtwos = Testimonialtwo::all();
      // print_r($testimonialones);
      return view('index/testimonial', compact('testimonialones', 'testimonialtwos'));
    }

    function clubsANDteams(){
      $clubsANDteamss = ClubsANDteams::all();
      $clubsANDteamstwos = ClubsANDteamstwo::all();
      $clubsANDteamsthrees = ClubsANDteamsthree::all();
      return view('index/clubsANDteams', compact('clubsANDteamss', 'clubsANDteamstwos', 'clubsANDteamsthrees'));
    }
    function contact(){
      return view('index/contact');
    }



}
