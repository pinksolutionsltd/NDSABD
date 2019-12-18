<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workingcommittee;
use App\Technicalmember;
use App\ClubsANDteams;
use App\ClubsANDteamstwo;
use App\ClubsANDteamsthree;
use Carbon\Carbon;
use Image;
use Alert;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    function addworkingcommittee(){
      return view('workingcommittee/addworkingcommittee');
    }


       //-------------------Start of Function workingcommitteeinsert
    function workingcommitteeinsert(Request $request){
      // print_r($request->all());
      // print_r($_POST);

      //---------------Validation Part------------------
      $request->validate(
      [
        'committee_name' => 'required',
        'committee_Details' => 'required',
      ],
      [
        'committee_name.required' => "Please fill up the name of Committee Name",
        'committee_Details.required'=> "Please fill up the name of Committee Details",
      ]
    );

      //---------------End Validation Part------------------

      //--------After Validation ---------------------
      //--------Image Upload----------------------
      if($request->hasFile('committee_image')){
        // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

        $committee_image = $request->file('committee_image');
        $filename = str_random(30).'.'.$committee_image->getClientOriginalExtension();
        Image::make($committee_image)->resize(500,600)->save( base_path('public/committee_image_folder/' . $filename));



        Workingcommittee::insert([
          'committee_name' => $request->committee_name,
          'committee_Details' => $request->committee_Details,
          'committee_image' => 'committee_image_folder/'.$filename,
          'created_at' => Carbon::now(),
        ]);

       return back()->with('success', 'Item Insert Successfully!');
      }

      else{
        return back();
      }

    }        //-------------------End of Function workingcommitteeinsert

            //--------------Start Table function of Working Committee----------------
    function tableworkingcommittee(){
      $workingcommittees = Workingcommittee::all();
      return view('workingcommittee/tableworkingcommittee', compact('workingcommittees'));
    }
    //----------------------End of Table function ----------------



    //----------------------Delete Function Start---------------
    function workingcommitteedelete($workingcommittee_id){
      // echo $mainslider_id;
      $imageLink = Workingcommittee::where('id', $workingcommittee_id)->first();
      $image = $imageLink->committee_image;
      echo $image;
      if ($image) {
        unlink($image);
        }
      Workingcommittee::findOrFail($workingcommittee_id)->delete();
      return back()->with('deletesuccess', 'Item deleted successfully!');
    }
    //----------------------Delete Function End-----------

    //----------------------Edit Function Start----------------------
    function workingcommitteeedit($workingcommittee_id){
      // echo $mainslider_id;
      $workingcommittees = Workingcommittee::findOrFail($workingcommittee_id);
      return view('workingcommittee/edit', compact('workingcommittees'));
    }
    //----------------------Edit Function End----------------------


//---------------------Update Function Started---------------------
    function workingcommitteeupdate(Request $request){
      // print_r($request->all());

        //-----------------------Delete Previous Image from Derectory------------------//
        if($request->hasFile('committee_image')){

          $imageLink = Workingcommittee::where('id', $request->workingcommittee_id)->first();
          $image = $imageLink->committee_image;
          // echo $image;

          if ($image) {
            unlink($image);
          }

          $committee_image = $request->file('committee_image');
          $filename = str_random(30).'.'.$committee_image->getClientOriginalExtension();
          Image::make($committee_image)->resize(500,600)->save( base_path('public/committee_image_folder/' . $filename));


          Workingcommittee::findOrFail($request->workingcommittee_id)->update(
            [
              'committee_name' => $request->committee_name,
              'committee_Details' => $request->committee_Details,
              'committee_image' => 'committee_image_folder/'.$filename,
            ]
          );
          return redirect('/table/workingcommittee');
        }

        else{
          Workingcommittee::findOrFail($request->workingcommittee_id)->update(
            [
              'committee_name' => $request->committee_name,
              'committee_Details' => $request->committee_Details,
              // 'slider_image' => $request->slider_image,
              // 'slider_image' =>
            ]
          );
          return redirect('/table/workingcommittee');
        }


    }         //-----------End of Update Function ----------------

//-------------------------------------------------------Technical Member Start--------------



function addtechnicalmember(){
  return view('technicalmember/addtechnicalmember');
}


   //-------------------Start of Function workingcommitteeinsert
function technicalmemberinsert(Request $request){
  // print_r($request->all());
  // print_r($_POST);

  //---------------Validation Part------------------
  $request->validate(
  [
    'technicalmember_name' => 'required',
    'technicalmember_Details' => 'required',
  ],
  [
    'technicalmember_name.required' => "Please fill up the name of Committee Name",
    'technicalmember_Details.required'=> "Please fill up the name of Committee Details",
  ]
);

  //---------------End Validation Part------------------

  //--------After Validation ---------------------
  //--------Image Upload----------------------
  if($request->hasFile('technicalmember_image')){
    // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

    $technicalmember_image = $request->file('technicalmember_image');
    $filename = str_random(30).'.'.$technicalmember_image->getClientOriginalExtension();
    Image::make($technicalmember_image)->resize(500,600)->save( base_path('public/technicalmember_image_folder/' . $filename));



    Technicalmember::insert([
      'technicalmember_name' => $request->technicalmember_name,
      'technicalmember_Details' => $request->technicalmember_Details,
      'technicalmember_image' => 'technicalmember_image_folder/'.$filename,
      'created_at' => Carbon::now(),
    ]);

   return back()->with('success', 'Item Insert Successfully!');
  }

  else{
    return back();
  }

}        //-------------------End of Function workingcommitteeinsert

        //--------------Start Table function of Working Committee----------------
function tabletechnicalmember(){
  $technicalmembers = Technicalmember::all();
  return view('technicalmember/tabletechnicalmember', compact('technicalmembers'));
}
//----------------------End of Table function ----------------



//----------------------Delete Function Start---------------
function technicalmemberdelete($technicalmember_id){
  // echo $mainslider_id;
  $imageLink = Technicalmember::where('id', $technicalmember_id)->first();
  $image = $imageLink->technicalmember_image;
  echo $image;
  if ($image) {
    unlink($image);
    }
  Technicalmember::findOrFail($technicalmember_id)->delete();
  return back()->with('deletesuccess', 'Item deleted successfully!');
}
//----------------------Delete Function End-----------

//----------------------Edit Function Start----------------------
function technicalmemberedit($technicalmember_id){
  // echo $mainslider_id;
  $technicalmembers = Technicalmember::findOrFail($technicalmember_id);
  return view('technicalmember/edit', compact('technicalmembers'));
}
//----------------------Edit Function End----------------------


//---------------------Update Function Started---------------------
function technicalmemberupdate(Request $request){
  // print_r($request->all());

    //-----------------------Delete Previous Image from Derectory------------------//
    if($request->hasFile('technicalmember_image')){

      $imageLink = Technicalmember::where('id', $request->technicalmember_id)->first();
      $image = $imageLink->technicalmember_image;
      // echo $image;

      if ($image) {
        unlink($image);
      }

      $technicalmember_image = $request->file('technicalmember_image');
      $filename = str_random(30).'.'.$technicalmember_image->getClientOriginalExtension();
      Image::make($technicalmember_image)->resize(500,600)->save( base_path('public/technicalmember_image_folder/' . $filename));


      Technicalmember::findOrFail($request->technicalmember_id)->update(
        [
          'technicalmember_name' => $request->technicalmember_name,
          'technicalmember_Details' => $request->technicalmember_Details,
          'technicalmember_image' => 'technicalmember_image_folder/'.$filename,
        ]
      );
      return redirect('/table/technicalmember');
    }

    else{
      Technicalmember::findOrFail($request->technicalmember_id)->update(
        [
          'technicalmember_name' => $request->technicalmember_name,
          'technicalmember_Details' => $request->technicalmember_Details,
          // 'slider_image' => $request->slider_image,
          // 'slider_image' =>
        ]
      );
      return redirect('/table/technicalmember');
    }


}         //-----------End of Update Function ----------------

    //-----------------Start Clubs And Teams Part---------------------------------


    function addclubsANDteams(){

    return view('clubsANDteams/add');
  }

       //-------------------Start of Function workingcommitteeinsert
    function clubsANDteamsinsert(Request $request){
      // print_r($request->all());
      // print_r($_POST);

      //---------------Validation Part------------------
      $request->validate(
      [
        'clubsANDteams_name' => 'required',
      ],
      [
        'clubsANDteams_name.required' => "Please fill up the name of Club Name",
      ]
    );
      //---------------End Validation Part------------------

      //--------After Validation ---------------------

        ClubsANDteams::insert([
          'clubsANDteams_name' => $request->clubsANDteams_name,
          'created_at' => Carbon::now(),
        ]);

       return back()->with('success', 'Item Insert Successfully!');

    }        //-------------------End of Function Insurt clubsANDteams

            //--------------Start Table function of ClubsANDteams----------------
    function tableclubsANDteams(){
      $clubsANDteamss = ClubsANDteams::all();
      return view('clubsANDteams/table', compact('clubsANDteamss'));
    }
    //----------------------End of Table function ----------------



    //----------------------Delete Function Start---------------
    function clubsANDteamsdelete($clubsANDteams_id){
      // echo $mainslider_id;

      ClubsANDteams::findOrFail($clubsANDteams_id)->delete();
      return back()->with('deletesuccess', 'Item deleted successfully!');
    }
    //----------------------Delete Function End-----------

    //----------------------Edit Function Start----------------------
    function clubsANDteamsedit($clubsANDteams_id){
      // echo $mainslider_id;
      $clubsANDteamss = ClubsANDteams::findOrFail($clubsANDteams_id);
      return view('clubsANDteams/edit', compact('clubsANDteamss'));
    }
    //----------------------Edit Function End----------------------


    //---------------------Update Function Started---------------------
    function clubsANDteamsupdate(Request $request){
      // print_r($request->all());


          ClubsANDteams::findOrFail($request->clubsANDteams_id)->update(
            [
              'clubsANDteams_name' => $request->clubsANDteams_name,
            ]
          );
          return redirect('/table/clubsANDteams');

    }         //-----------End of Update Function ----------------


    // -------------------First Division Clubs Part---------------------



        function addclubsANDteamstwo(){

        return view('clubsANDteamstwo/add');
      }

           //-------------------Start of Function workingcommitteeinsert
        function clubsANDteamstwoinsert(Request $request){
          // print_r($request->all());
          // print_r($_POST);

          //---------------Validation Part------------------
          $request->validate(
          [
            'clubsANDteamstwo_name' => 'required',
          ],
          [
            'clubsANDteamstwo_name.required' => "Please fill up the name of Club Name",
          ]
        );
          //---------------End Validation Part------------------

          //--------After Validation ---------------------

            ClubsANDteamstwo::insert([
              'clubsANDteamstwo_name' => $request->clubsANDteamstwo_name,
              'created_at' => Carbon::now(),
            ]);

           return back()->with('success', 'Item Insert Successfully!');

        }        //-------------------End of Function Insurt clubsANDteams

                //--------------Start Table function of ClubsANDteams----------------
        function tableclubsANDteamstwo(){
          $clubsANDteamstwos = ClubsANDteamstwo::all();
          return view('clubsANDteamstwo/table', compact('clubsANDteamstwos'));
        }
        //----------------------End of Table function ----------------



        //----------------------Delete Function Start---------------
        function clubsANDteamstwodelete($clubsANDteamstwo_id){
          // echo $mainslider_id;

          ClubsANDteamstwo::findOrFail($clubsANDteamstwo_id)->delete();
          return back()->with('deletesuccess', 'Item deleted successfully!');
        }
        //----------------------Delete Function End-----------

        //----------------------Edit Function Start----------------------
        function clubsANDteamstwoedit($clubsANDteamstwo_id){
          // echo $mainslider_id;
          $clubsANDteamstwos = ClubsANDteamstwo::findOrFail($clubsANDteamstwo_id);
          return view('clubsANDteamstwo/edit', compact('clubsANDteamstwos'));
        }
        //----------------------Edit Function End----------------------


        //---------------------Update Function Started---------------------
        function clubsANDteamstwoupdate(Request $request){
          // print_r($request->all());


              ClubsANDteamstwo::findOrFail($request->clubsANDteamstwo_id)->update(
                [
                  'clubsANDteamstwo_name' => $request->clubsANDteamstwo_name,
                ]
              );
              return redirect('/table/clubsANDteamstwo');

        }         //-----------End of Update Function ----------------





        // -------------------Second Division Clubs Part---------------------



            function addclubsANDteamsthree(){

            return view('clubsANDteamsthree/add');
          }

               //-------------------Start of Function workingcommitteeinsert
            function clubsANDteamsthreeinsert(Request $request){
              // print_r($request->all());
              // print_r($_POST);

              //---------------Validation Part------------------
              $request->validate(
              [
                'clubsANDteamsthree_name' => 'required',
              ],
              [
                'clubsANDteamsthree_name.required' => "Please fill up the name of Club Name",
              ]
            );
              //---------------End Validation Part------------------

              //--------After Validation ---------------------

                ClubsANDteamsthree::insert([
                  'clubsANDteamsthree_name' => $request->clubsANDteamsthree_name,
                  'created_at' => Carbon::now(),
                ]);

               return back()->with('success', 'Item Insert Successfully!');

            }        //-------------------End of Function Insurt clubsANDteams

                    //--------------Start Table function of ClubsANDteams----------------
            function tableclubsANDteamsthree(){
              $clubsANDteamsthrees = ClubsANDteamsthree::all();
              return view('clubsANDteamsthree/table', compact('clubsANDteamsthrees'));
            }
            //----------------------End of Table function ----------------



            //----------------------Delete Function Start---------------
            function clubsANDteamsthreedelete($clubsANDteamsthree_id){
              // echo $mainslider_id;

              ClubsANDteamsthree::findOrFail($clubsANDteamsthree_id)->delete();
              return back()->with('deletesuccess', 'Item deleted successfully!');
            }
            //----------------------Delete Function End-----------

            //----------------------Edit Function Start----------------------
            function clubsANDteamsthreeedit($clubsANDteamsthree_id){
              // echo $mainslider_id;
              $clubsANDteamsthrees = ClubsANDteamsthree::findOrFail($clubsANDteamsthree_id);
              return view('clubsANDteamsthree/edit', compact('clubsANDteamsthrees'));
            }
            //----------------------Edit Function End----------------------


            //---------------------Update Function Started---------------------
            function clubsANDteamsthreeupdate(Request $request){
              // print_r($request->all());


                  ClubsANDteamsthree::findOrFail($request->clubsANDteamsthree_id)->update(
                    [
                      'clubsANDteamsthree_name' => $request->clubsANDteamsthree_name,
                    ]
                  );
                  return redirect('/table/clubsANDteamsthree');

            }         //-----------End of Update Function ----------------


    //-----------------End Clubs And Teams Part---------------------------------



}           //---------------------End of the Class---------------
