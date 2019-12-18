<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indexcurrentevent;
use App\Indexnextevent;
use App\Presidentinfo;
use App\Secretary;
use Carbon\Carbon;
use App\Contact;
use App\Awesomeserviceleft;
use App\Awesomeserviceright;
use App\Eventschedule;
use Image;

class IndexController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


//-----------------------------Start Index:CurrentEvent part ------------------------------//


            function addindexcurrentevent(){

            return view('indexcurrentevent/add');
          }

               //-------------------Start of Function ------------------------//
            function indexcurrenteventinsert(Request $request){
              // print_r($request->all());
              // print_r($_POST);

              //---------------Validation Part------------------//
              $request->validate(
              [
                'indexcurrentevent_heading' => 'required',
                'indexcurrentevent_details' => 'required',
              ],
              [
                'indexcurrentevent_heading.required' => "Please fill up the name of Event",
                'indexcurrentevent_details.required' => "Please fill up the Details of Event",
              ]
            );
              //---------------End Validation Part------------------//

              //--------After Validation -----------------------------------//

                Indexcurrentevent::insert([
                  'indexcurrentevent_heading' => $request->indexcurrentevent_heading,
                  'indexcurrentevent_details' => $request->indexcurrentevent_details,
                  'created_at' => Carbon::now(),
                ]);

               return back()->with('success', 'Item Insert Successfully!');

            }        //-------------------End of Function Insurt -------------------//

                    //--------------Start Table function ----------------------------//
            function tableindexcurrentevent(){
              $indexcurrentevents = Indexcurrentevent::all();
              return view('indexcurrentevent/table', compact('indexcurrentevents'));
            }
            //----------------------End of Table function ----------------



            //----------------------Delete Function Start---------------
            function indexcurrenteventdelete($indexcurrentevent_id){
              // echo $mainslider_id;

              Indexcurrentevent::findOrFail($indexcurrentevent_id)->delete();
              return back()->with('deletesuccess', 'Item deleted successfully!');
            }
            //----------------------Delete Function End-----------


            //----------------------Edit Function Start----------------------
            function indexcurrenteventedit($indexcurrentevent_id){
              // echo $mainslider_id;
              $indexcurrentevents = Indexcurrentevent::findOrFail($indexcurrentevent_id);
              return view('indexcurrentevent/edit', compact('indexcurrentevents'));
            }
            //----------------------Edit Function End----------------------


            //---------------------Update Function Started---------------------
            function indexcurrenteventupdate(Request $request){
              // print_r($request->all());

                  Indexcurrentevent::findOrFail($request->indexcurrentevent_id)->update(
                    [
                      'indexcurrentevent_heading' => $request->indexcurrentevent_heading,
                      'indexcurrentevent_details' => $request->indexcurrentevent_details,
                    ]
                  );
                  return redirect('/table/indexcurrentevent');


            }         //-----------End of Update Function ----------------
            //-----------------------------End Index:CurrentEvent part ------------------------------//


//-----------------------------Start Index:NextEvent part ------------------------------//

            function addindexnextevent(){

            return view('indexnextevent/add');
          }

               //-------------------Start of Function ------------------------//
            function indexnexteventinsert(Request $request){
              // print_r($request->all());
              // print_r($_POST);

              //---------------Validation Part------------------//
              $request->validate(
              [
                'indexnextevent_teamone' => 'required',
                'indexnextevent_teamtwo' => 'required',
                'indexnextevent_time' => 'required',
                'indexnextevent_place' => 'required',
              ],
              [
                'indexnextevent_teamone.required' => "Please fill up the Team one name of Event",
                'indexnextevent_teamtwo.required' => "Please fill up the Team Two name of Event",
                'indexnextevent_time.required' => "Please fill up the Time of Event",
                'indexnextevent_place.required' => "Please fill up the Place of Event",
              ]
            );
              //---------------End Validation Part------------------//

              //--------After Validation -----------------------------------//

                Indexnextevent::insert([
                  'indexnextevent_teamone' => $request->indexnextevent_teamone,
                  'indexnextevent_teamtwo' => $request->indexnextevent_teamtwo,
                  'indexnextevent_time' => $request->indexnextevent_time,
                  'indexnextevent_place' => $request->indexnextevent_place,
                  'created_at' => Carbon::now(),
                ]);

               return back()->with('success', 'Item Insert Successfully!');

            }        //-------------------End of Function Insurt -------------------//

                    //--------------Start Table function ----------------------------//
            function tableindexnextevent(){
              $indexnextevents = Indexnextevent::all();
              return view('indexnextevent/table', compact('indexnextevents'));
            }
            //----------------------End of Table function ----------------



            //----------------------Delete Function Start---------------
            function indexnexteventdelete($indexnextevent_id){
              // echo $mainslider_id;

              Indexnextevent::findOrFail($indexnextevent_id)->delete();
              return back()->with('deletesuccess', 'Item deleted successfully!');
            }
            //----------------------Delete Function End-----------


            //----------------------Edit Function Start----------------------
            function indexnexteventedit($indexnextevent_id){
              // echo $mainslider_id;
              $indexnextevents = Indexnextevent::findOrFail($indexnextevent_id);
              return view('indexnextevent/edit', compact('indexnextevents'));
            }
            //----------------------Edit Function End----------------------


            //---------------------Update Function Started---------------------
            function indexnexteventupdate(Request $request){
              // print_r($request->all());

                  Indexnextevent::findOrFail($request->indexnextevent_id)->update(
                    [
                      'indexnextevent_teamone' => $request->indexnextevent_teamone,
                      'indexnextevent_teamtwo' => $request->indexnextevent_teamtwo,
                      'indexnextevent_time' => $request->indexnextevent_time,
                      'indexnextevent_place' => $request->indexnextevent_place,
                    ]
                  );
                  return redirect('/table/indexnextevent');


            }         //-----------End of Update Function ----------------
            //-----------------------------End Index:NextEvent part ------------------------------//





            //-----------------------------Start Index:President Info part ------------------------------//


                function addpresidentinfo(){
                  return view('indexPresidentinfo/add');
                }


                   //-------------------Start of Function workingcommitteeinsert
                function presidentinfoinsert(Request $request){
                  // print_r($request->all());
                  // print_r($_POST);

                  //---------------Validation Part------------------
                  $request->validate(
                  [
                    'presidentinfo_name' => 'required',
                    'presidentinfo_title' => 'required',
                    'presidentinfo_Details' => 'required',
                    'presidentinfo_Speech' => 'required',
                  ],
                  [
                    'presidentinfo_name.required' => "Please fill up the name of President Name",
                    'presidentinfo_title.required'=> "Please fill up the name of President Title",
                    'presidentinfo_Details.required'=> "Please fill up the name of President Details",
                    'presidentinfo_Speech.required'=> "Please fill up the name of President Speech",
                  ]
                );

                  //---------------End Validation Part------------------

                  //--------After Validation ---------------------
                  //--------Image Upload----------------------
                  if($request->hasFile('presidentinfo_image')){
                    // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

                    $presidentinfo_image = $request->file('presidentinfo_image');
                    $filename = str_random(30).'.'.$presidentinfo_image->getClientOriginalExtension();
                    Image::make($presidentinfo_image)->resize(500,600)->save( base_path('public/presidentinfo_image_folder/' . $filename));



                    Presidentinfo::insert([
                      'presidentinfo_name' => $request->presidentinfo_name,
                      'presidentinfo_title' => $request->presidentinfo_title,
                      'presidentinfo_Details' => $request->presidentinfo_Details,
                      'presidentinfo_Speech' => $request->presidentinfo_Speech,
                      'presidentinfo_image' => 'presidentinfo_image_folder/'.$filename,
                      'created_at' => Carbon::now(),
                    ]);

                   return back()->with('success', 'Item Insert Successfully!');
                  }

                  else{
                    return back();
                  }

                }        //-------------------End of Function workingcommitteeinsert

                        //--------------Start Table function of Working Committee----------------
                function tablepresidentinfo(){
                  // $mainsliders = Mainslider::orderBy('id', 'desc')->get();
                  $presidentinfos = Presidentinfo::orderBy('id', 'desc')->get();
                  return view('indexPresidentinfo/table', compact('presidentinfos'));
                }
                //----------------------End of Table function ----------------



                //----------------------Delete Function Start---------------
                function presidentinfodelete($presidentinfo_id){
                  // echo $mainslider_id;
                  $imageLink = Presidentinfo::where('id', $presidentinfo_id)->first();
                  $image = $imageLink->presidentinfo_image;
                  echo $image;
                  if ($image) {
                    unlink($image);
                    }
                  Presidentinfo::findOrFail($presidentinfo_id)->delete();
                  return back()->with('deletesuccess', 'Item deleted successfully!');
                }
                //----------------------Delete Function End-----------

                //----------------------Edit Function Start----------------------
                function presidentinfoedit($presidentinfo_id){
                  // echo $mainslider_id;
                  $presidentinfos = Presidentinfo::findOrFail($presidentinfo_id);
                  return view('indexpresidentinfo/edit', compact('presidentinfos'));
                }
                //----------------------Edit Function End----------------------


            //---------------------Update Function Started---------------------
                function presidentinfoupdate(Request $request){
                  // print_r($request->all());

                    //-----------------------Delete Previous Image from Derectory------------------//
                    if($request->hasFile('presidentinfo_image')){

                      $imageLink = Presidentinfo::where('id', $request->presidentinfo_id)->first();
                      $image = $imageLink->presidentinfo_image;
                      // echo $image;

                      if ($image) {
                        unlink($image);
                      }

                      $presidentinfo_image = $request->file('presidentinfo_image');
                      $filename = str_random(30).'.'.$presidentinfo_image->getClientOriginalExtension();
                      Image::make($presidentinfo_image)->resize(500,600)->save( base_path('public/presidentinfo_image_folder/' . $filename));


                      Presidentinfo::findOrFail($request->presidentinfo_id)->update(
                        [
                          'presidentinfo_name' => $request->presidentinfo_name,
                          'presidentinfo_title' => $request->presidentinfo_title,
                          'presidentinfo_Details' => $request->presidentinfo_Details,
                          'presidentinfo_Speech' => $request->presidentinfo_Speech,
                          'presidentinfo_image' => 'presidentinfo_image_folder/'.$filename,
                        ]
                      );
                      return redirect('/table/presidentinfo');
                    }

                    else{
                      Presidentinfo::findOrFail($request->presidentinfo_id)->update(
                        [
                          'presidentinfo_name' => $request->presidentinfo_name,
                          'presidentinfo_title' => $request->presidentinfo_title,
                          'presidentinfo_Details' => $request->presidentinfo_Details,
                          'presidentinfo_Speech' => $request->presidentinfo_Speech,
                          // 'slider_image' => $request->slider_image,
                          // 'slider_image' =>
                        ]
                      );
                      return redirect('/table/presidentinfo');
                    }


                }         //-----------End of Update Function ----------------

            //-----------------------------End Index:President Info part ------------------------------//





                        //-----------------------------Start Index:Secretary Info part ------------------------------//


                            function addsecretary(){
                              return view('indexSecretary/add');
                            }


                               //-------------------Start of Function workingcommitteeinsert
                            function secretaryinsert(Request $request){
                              // print_r($request->all());
                              // print_r($_POST);

                              //---------------Validation Part------------------
                              $request->validate(
                              [
                                'secretary_name' => 'required',
                                'secretary_title' => 'required',
                                'secretary_Details' => 'required',
                                'secretary_Speech' => 'required',
                              ],
                              [
                                'secretary_name.required' => "Please fill up the name of Secretary Name",
                                'secretary_title.required'=> "Please fill up the name of Secretary Title",
                                'secretary_Details.required'=> "Please fill up the name of Secretary Details",
                                'secretary_Speech.required'=> "Please fill up the name of Secretary Speech",
                              ]
                            );

                              //---------------End Validation Part------------------

                              //--------After Validation ---------------------
                              //--------Image Upload----------------------
                              if($request->hasFile('secretary_image')){
                                // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

                                $secretary_image = $request->file('secretary_image');
                                $filename = str_random(30).'.'.$secretary_image->getClientOriginalExtension();
                                Image::make($secretary_image)->resize(500,600)->save( base_path('public/secretary_image_folder/' . $filename));



                                Secretary::insert([
                                  'secretary_name' => $request->secretary_name,
                                  'secretary_title' => $request->secretary_title,
                                  'secretary_Details' => $request->secretary_Details,
                                  'secretary_Speech' => $request->secretary_Speech,
                                  'secretary_image' => 'secretary_image_folder/'.$filename,
                                  'created_at' => Carbon::now(),
                                ]);

                               return back()->with('success', 'Item Insert Successfully!');
                              }

                              else{
                                return back();
                              }

                            }        //-------------------End of Function workingcommitteeinsert

                                    //--------------Start Table function of Working Committee----------------
                            function tablesecretary(){
                              // $mainsliders = Mainslider::orderBy('id', 'desc')->get();
                              $secretaries = Secretary::orderBy('id', 'desc')->get();
                              return view('indexSecretary/table', compact('secretaries'));
                            }
                            //----------------------End of Table function ----------------



                            //----------------------Delete Function Start---------------
                            function secretarydelete($secretary_id){
                              // echo $mainslider_id;
                              $imageLink = Secretary::where('id', $secretary_id)->first();
                              $image = $imageLink->secretary_image;
                              echo $image;
                              if ($image) {
                                unlink($image);
                                }
                              Secretary::findOrFail($secretary_id)->delete();
                              return back()->with('deletesuccess', 'Item deleted successfully!');
                            }
                            //----------------------Delete Function End-----------


                            //----------------------Edit Function Start----------------------
                            function secretaryedit($secretary_id){
                              // echo $mainslider_id;
                              $secretaries = Secretary::findOrFail($secretary_id);
                              return view('indexSecretary/edit', compact('secretaries'));
                            }
                            //----------------------Edit Function End----------------------


                        //---------------------Update Function Started---------------------


                    function secretaryupdate(Request $request){
                      // print_r($request->all());

                        //-----------------------Delete Previous Image from Derectory------------------//
                        if($request->hasFile('secretary_image')){

                          $imageLink = Secretary::where('id', $request->secretary_id)->first();
                          $image = $imageLink->secretary_image;
                          // echo $image;

                          if ($image) {
                            unlink($image);
                          }

                          $secretary_image = $request->file('secretary_image');
                          $filename = str_random(30).'.'.$secretary_image->getClientOriginalExtension();
                          Image::make($secretary_image)->resize(500,600)->save( base_path('public/secretary_image_folder/' . $filename));


                          Secretary::findOrFail($request->secretary_id)->update(
                            [
                              'secretary_name' => $request->secretary_name,
                              'secretary_title' => $request->secretary_title,
                              'secretary_Details' => $request->secretary_Details,
                              'secretary_Speech' => $request->secretary_Speech,
                              'secretary_image' => 'secretary_image_folder/'.$filename,
                            ]
                          );
                          return redirect('/table/secretary');
                        }

                        else{
                          Secretary::findOrFail($request->secretary_id)->update(
                            [
                              'secretary_name' => $request->secretary_name,
                              'secretary_title' => $request->secretary_title,
                              'secretary_Details' => $request->secretary_Details,
                              'secretary_Speech' => $request->secretary_Speech,
                              // 'slider_image' => $request->slider_image,
                              // 'slider_image' =>
                            ]
                          );
                          return redirect('/table/secretary');
                        }


                    }

                                   //-----------End of Update Function ----------------

                        //-----------------------------End Index:Secretary Info part ------------------------------//






            //-----------------------------Start Contact part ------------------------------//

                           //-------------------Start of Insert Function ------------------------//
                        function contactinsert(Request $request){
                          // print_r($request->all());
                          // print_r($_POST);

                          //---------------Validation Part------------------//
                          $request->validate(
                          [
                            'contact_name' => 'required',
                            'contact_email' => 'required',
                            'contact_message' => 'required',
                          ],
                          [
                            'contact_name.required' => "Please fill the Contact Name",
                            'contact_email.required' => "Please fill the valid Email Address",
                            'contact_message.required' => "Please Put Your Message",
                          ]
                        );

                          //---------------End Validation Part------------------//

                          //--------After Validation -----------------------------------//

                            Contact::insert([
                              'contact_name' => $request->contact_name,
                              'contact_email' => $request->contact_email,
                              'contact_message' => $request->contact_message,
                              'created_at' => Carbon::now(),
                            ]);

                           return back()->with('success', 'Item Insert Successfully!');

                        }        //-------------------End of Function Insurt -------------------//


                                //--------------Start Table function ----------------------------//
                        function tablecontact(){
                          $contacts = Contact::all();
                          return view('contact/table', compact('contacts'));
                         }
                        //----------------------End of Table function ----------------



              //----------------------Delete Function Start---------------
                        function contactdelete($contact_id){
                          // echo $contact_id;
                          Contact::findOrFail($contact_id)->delete();
                          return back()->with('deletesuccess', 'Item deleted successfully!');
                        }
                        //----------------------Delete Function End------------------------------------//
                        //-----------------------------End Of Contact part ------------------------------//




                        //-----------------------------Start Index:awesomeserviceleft part ------------------------------//


                            function addawesomeserviceleft(){
                              return view('awesomeserviceleft/add');
                            }


                               //-------------------Start of Function workingcommitteeinsert
                            function awesomeserviceleftinsert(Request $request){
                              // print_r($request->all());
                              // print_r($_POST);

                              //---------------Validation Part------------------
                              $request->validate(
                              [
                                'awesomeserviceleft_name' => 'required',
                                'awesomeserviceleft_details' => 'required',
                              ],
                              [
                                'awesomeserviceleft_name.required' => "Please fill up the Name",
                                'awesomeserviceleft_details.required'=> "Please fill up Details",
                              ]
                            );

                              //---------------End Validation Part------------------

                              //--------After Validation ---------------------

                                Awesomeserviceleft::insert([
                                  'awesomeserviceleft_name' => $request->awesomeserviceleft_name,
                                  'awesomeserviceleft_details' => $request->awesomeserviceleft_details,
                                  'created_at' => Carbon::now(),

                                ]);
                               return back()->with('success', 'Item Insert Successfully!');

                            }        //-------------------End of Function Index:awesomeserviceleft insert--------------

                                    //--------------Start Table function of Index:awesomeserviceleft----------------
                            function tableawesomeserviceleft(){
                              $awesomeservicelefts = Awesomeserviceleft::all();
                              $deleted_awesomeservicelefts = Awesomeserviceleft::onlyTrashed()->get();
                              return view('awesomeserviceleft/table', compact('awesomeservicelefts','deleted_awesomeservicelefts'));
                              // print_r($deleted_awesomeservicelefts);
                            }
                            //----------------------End of Table function ----------------



                            //----------------------Delete Function Start---------------
                            function awesomeserviceleftdelete($awesomeserviceleft_id){
                              // echo $mainslider_id;
                              Awesomeserviceleft::findOrFail($awesomeserviceleft_id)->delete();
                              return back()->with('deletesuccess', 'Item deleted successfully!');
                            }
                            //----------------------Delete Function End-----------

                            //----------------------Edit Function Start----------------------
                            function awesomeserviceleftedit($awesomeserviceleft_id){
                              // echo $mainslider_id;
                              $awesomeservicelefts = Awesomeserviceleft::findOrFail($awesomeserviceleft_id);
                              return view('awesomeserviceleft/edit', compact('awesomeservicelefts'));
                            }
                            //----------------------Edit Function End----------------------


                        //---------------------Update Function Started---------------------
                            function awesomeserviceleftupdate(Request $request){
                              // print_r($request->all());


                                  Awesomeserviceleft::findOrFail($request->awesomeserviceleft_id)->update(
                                    [
                                      'awesomeserviceleft_name' => $request->awesomeserviceleft_name,
                                      'awesomeserviceleft_details' => $request->awesomeserviceleft_details,
                                    ]
                                  );
                                  return redirect('/table/awesomeserviceleft');

                            }         //-----------End of Update Function ----------------

                    //-----------------------------------Start Restore Item Part------------------------------------
                      function awesomeserviceleftrestore($awesomeserviceleft_id){
                        Awesomeserviceleft::onlyTrashed()->findOrFail($awesomeserviceleft_id)->restore();
                        return back();
                      }
                  //----------------------------End Resytore Item Part----------------------------------------------

                        //-----------------------------End Index:awesomeserviceleft part ------------------------------//


                        //-----------------------------Start Index:awesomeservice Right part ------------------------------//


                            function addawesomeserviceright(){
                              return view('awesomeserviceright/add');
                            }


                               //-------------------Start of Function insert-------------
                            function awesomeservicerightinsert(Request $request){
                              // print_r($request->all());
                              // print_r($_POST);

                              //---------------Validation Part------------------
                              $request->validate(
                              [
                                'awesomeserviceright_name' => 'required',
                                'awesomeserviceright_details' => 'required',
                              ],
                              [
                                'awesomeserviceright_name.required' => "Please fill up the Name",
                                'awesomeserviceright_details.required'=> "Please fill up Details",
                              ]
                            );

                              //---------------End Validation Part------------------

                              //--------After Validation ---------------------

                                Awesomeserviceright::insert([
                                  'awesomeserviceright_name' => $request->awesomeserviceright_name,
                                  'awesomeserviceright_details' => $request->awesomeserviceright_details,
                                  'created_at' => Carbon::now(),

                                ]);
                               return back()->with('success', 'Item Insert Successfully!');

                            }        //-------------------End of Function Index:awesomeserviceleft insert--------------



                            //--------------Start Table function of Index:awesomeserviceleft----------------
                            function tableawesomeserviceright(){
                              $awesomeservicerights = Awesomeserviceright::all();
                              $deleted_awesomeservicerights = Awesomeserviceright::onlyTrashed()->get();
                              return view('awesomeserviceright/table', compact('awesomeservicerights', 'deleted_awesomeservicerights'));
                            }
                            //----------------------End of Table function ----------------



                            //----------------------Delete Function Start---------------
                            function awesomeservicerightdelete($awesomeserviceright_id){
                              // echo $mainslider_id;
                              Awesomeserviceright::findOrFail($awesomeserviceright_id)->delete();
                              return back()->with('deletesuccess', 'Item deleted successfully!');
                            }
                            //----------------------Delete Function End-----------

                            //-----------------------------------Start Restore Item Part------------------------------------
                              function awesomeservicerightrestore($awesomeserviceright_id){
                                Awesomeserviceright::onlyTrashed()->findOrFail($awesomeserviceright_id)->restore();
                                return back();
                              }
                          //----------------------------End Resytore Item Part----------------------------------------------



                            //----------------------Edit Function Start----------------------
                            function awesomeservicerightedit($awesomeserviceright_id){
                              // echo $mainslider_id;
                              $awesomeservicerights = Awesomeserviceright::findOrFail($awesomeserviceright_id);
                              return view('awesomeserviceright/edit', compact('awesomeservicerights'));
                            }
                            //----------------------Edit Function End----------------------


                        //---------------------Update Function Started---------------------
                            function awesomeservicerightupdate(Request $request){
                              // print_r($request->all());


                                  Awesomeserviceright::findOrFail($request->awesomeserviceright_id)->update(
                                    [
                                      'awesomeserviceright_name' => $request->awesomeserviceright_name,
                                      'awesomeserviceright_details' => $request->awesomeserviceright_details,
                                    ]
                                  );
                                  return redirect('/table/awesomeserviceright');

                            }         //-----------End of Update Function ----------------

                        //-----------------------------End Index:awesomeserviceleft part ------------------------------//



}           //----------------------End of main Class----------------------------
