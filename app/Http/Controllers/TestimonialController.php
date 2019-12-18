<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonialone;
use App\Testimonialtwo;
use App\Testimonialthree;
use Carbon\Carbon;
use Image;

class TestimonialController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }


  //-----------------------------Start Testimonial Part------------------------------
              //-------------------------TestimonialOne Start--------------------------

              function addtestimonialone(){
                return view('testimonialone/add');
              }


                 //-------------------Start of Function Testimonialone Insert ----------
              function testimonialoneinsert(Request $request){
                // print_r($request->all());
                // print_r($_POST);

                //---------------Validation Part------------------
                $request->validate(
                [
                  'testimonialone_comments' => 'required',
                  'testimonialone_name' => 'required',
                  'testimonialone_details' => 'required',
                ],
                [
                  'testimonialone_comments.required' => "Please fill up the Comments",
                  'testimonialone_name.required' => "Please fill up the name of Testimonialone Name",
                  'testimonialone_details.required'=> "Please fill up the name of Testimonialone Details",
                ]
              );


                //---------------End Validation Part------------------

                //--------After Validation ---------------------
                //--------Image Upload----------------------
                if($request->hasFile('testimonialone_image')){
                  // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

                  $testimonialone_image = $request->file('testimonialone_image');
                  $filename = str_random(30).'.'.$testimonialone_image->getClientOriginalExtension();
                  Image::make($testimonialone_image)->resize(100,100)->save( base_path('public/testimonialone_image_folder/' . $filename));



                  Testimonialone::insert([
                    'testimonialone_comments' => $request->testimonialone_comments,
                    'testimonialone_name' => $request->testimonialone_name,
                    'testimonialone_details' => $request->testimonialone_details,
                    'testimonialone_image' => 'testimonialone_image_folder/'.$filename,
                    'created_at' => Carbon::now(),
                  ]);

                 return back()->with('success', 'Item Insert Successfully!');
                }

                else{
                  return back();
                }

              }        //-------------------End of Function Testimonialone insert

                      //--------------Start Table function of Testimonialone----------------
              function tabletestimonialone(){
                $testimonialones = Testimonialone::all();
                // print_r($testimonialones);
                return view('testimonialone/table', compact('testimonialones'));
              }
              //----------------------End of Table function ----------------



              //----------------------Delete Function Start---------------
              function testimonialonedelete($testimonialone_id){
                // echo $mainslider_id;
                $imageLink = Testimonialone::where('id', $testimonialone_id)->first();
                $image = $imageLink->testimonialone_image;
                echo $image;
                if ($image) {
                  unlink($image);
                  }
                Testimonialone::findOrFail($testimonialone_id)->delete();
                return back()->with('deletesuccess', 'Item deleted successfully!');
              }
              //----------------------Delete Function End-----------

              //----------------------Edit Function Start----------------------
              function testimonialoneedit($testimonialone_id){
                // echo $mainslider_id;
                $testimonialones = Testimonialone::findOrFail($testimonialone_id);
                return view('testimonialone/edit', compact('testimonialones'));
              }
              //----------------------Edit Function End----------------------


              //---------------------Update Function Started---------------------
              function testimonialoneupdate(Request $request){
                // print_r($request->all());

                  //-----------------------Delete Previous Image from Derectory------------------//
                  if($request->hasFile('testimonialone_image')){

                    $imageLink = Testimonialone::where('id', $request->testimonialone_id)->first();
                    $image = $imageLink->testimonialone_image;
                    // echo $image;

                    if ($image) {
                      unlink($image);
                    }

                    $testimonialone_image = $request->file('testimonialone_image');
                    $filename = str_random(30).'.'.$testimonialone_image->getClientOriginalExtension();
                    Image::make($testimonialone_image)->resize(100,100)->save( base_path('public/testimonialone_image_folder/' . $filename));


                    Testimonialone::findOrFail($request->testimonialone_id)->update(
                      [
                        'testimonialone_comments' => $request->testimonialone_comments,
                        'testimonialone_name' => $request->testimonialone_name,
                        'testimonialone_details' => $request->testimonialone_details,
                        'testimonialone_image' => 'testimonialone_image_folder/'.$filename,
                      ]
                    );
                    return redirect('/table/testimonialone');
                  }

                  else{
                    Testimonialone::findOrFail($request->testimonialone_id)->update(
                      [
                        'testimonialone_comments' => $request->testimonialone_comments,
                        'testimonialone_name' => $request->testimonialone_name,
                        'testimonialone_details' => $request->testimonialone_details,
                        // 'slider_image' => $request->slider_image,
                        // 'slider_image' =>
                      ]
                    );
                    return redirect('/table/testimonialone');
                  }


              }         //-----------End of Update Function ----------------


              //------------------------- End TestimonialOne-------------------------




              //-------------------------TestimonialTwo Start--------------------------


              function addtestimonialtwo(){
                return view('testimonialtwo/add');
              }


                 //-------------------Start of Function Testimonialone Insert ----------
              function testimonialtwoinsert(Request $request){
                //  print_r($request->all());
                // print_r($_POST);

                //---------------Validation Part------------------
                $request->validate(
                [
                  'testimonialtwo_comments' => 'required',
                  'testimonialtwo_name' => 'required',
                  'testimonialtwo_details' => 'required',
                ],
                [
                  'testimonialtwo_comments.required' => "Please fill up the Comments",
                  'testimonialtwo_name.required' => "Please fill up the name of Testimonialtwo Name",
                  'testimonialtwo_details.required'=> "Please fill up the name of Testimonialtwo Details",
                ]
              );


                //---------------End Validation Part------------------

                //--------After Validation ---------------------
                //--------Image Upload----------------------
                if($request->hasFile('testimonialtwo_image')){
                  // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

                  $testimonialtwo_image = $request->file('testimonialtwo_image');
                  $filename = str_random(30).'.'.$testimonialtwo_image->getClientOriginalExtension();
                  Image::make($testimonialtwo_image)->resize(100,100)->save( base_path('public/testimonialtwo_image_folder/' . $filename));



                  Testimonialtwo::insert([
                    'testimonialtwo_comments' => $request->testimonialtwo_comments,
                    'testimonialtwo_name' => $request->testimonialtwo_name,
                    'testimonialtwo_details' => $request->testimonialtwo_details,
                    'testimonialtwo_image' => 'testimonialtwo_image_folder/'.$filename,
                    'created_at' => Carbon::now(),
                  ]);

                 return back()->with('success', 'Item Insert Successfully!');
                }

                else{
                  return back();
                }

               }        //-------------------End of Function Testimonialone insert

                      //--------------Start Table function of Testimonialone----------------
              function tabletestimonialtwo(){
                $testimonialtwos = Testimonialtwo::all();
                // print_r($testimonialones);
                return view('testimonialtwo/table', compact('testimonialtwos'));
              }
              //----------------------End of Table function ----------------



              //----------------------Delete Function Start---------------
              function testimonialtwodelete($testimonialtwo_id){
                // echo $mainslider_id;
                $imageLink = Testimonialtwo::where('id', $testimonialtwo_id)->first();
                $image = $imageLink->testimonialtwo_image;
                echo $image;
                if ($image) {
                  unlink($image);
                  }
                Testimonialtwo::findOrFail($testimonialtwo_id)->delete();
                return back()->with('deletesuccess', 'Item deleted successfully!');
              }
              //----------------------Delete Function End-----------

              //----------------------Edit Function Start----------------------
              function testimonialtwoedit($testimonialtwo_id){
                // echo $mainslider_id;
                $testimonialtwos = Testimonialtwo::findOrFail($testimonialtwo_id);
                return view('testimonialtwo/edit', compact('testimonialtwos'));
              }
              //----------------------Edit Function End----------------------


              //---------------------Update Function Started---------------------
              function testimonialtwoupdate(Request $request){
                // print_r($request->all());

                  //-----------------------Delete Previous Image from Derectory------------------//
                  if($request->hasFile('testimonialtwo_image')){

                    $imageLink = Testimonialtwo::where('id', $request->testimonialtwo_id)->first();
                    $image = $imageLink->testimonialtwo_image;
                    // echo $image;

                    if ($image) {
                      unlink($image);
                    }

                    $testimonialtwo_image = $request->file('testimonialtwo_image');
                    $filename = str_random(30).'.'.$testimonialtwo_image->getClientOriginalExtension();
                    Image::make($testimonialtwo_image)->resize(100,100)->save( base_path('public/testimonialtwo_image_folder/' . $filename));


                    Testimonialtwo::findOrFail($request->testimonialtwo_id)->update(
                      [
                        'testimonialtwo_comments' => $request->testimonialtwo_comments,
                        'testimonialtwo_name' => $request->testimonialtwo_name,
                        'testimonialtwo_details' => $request->testimonialtwo_details,
                        'testimonialtwo_image' => 'testimonialtwo_image_folder/'.$filename,
                      ]
                    );
                    return redirect('/table/testimonialtwo');
                  }

                  else{
                    Testimonialtwo::findOrFail($request->testimonialtwo_id)->update(
                      [
                        'testimonialtwo_comments' => $request->testimonialtwo_comments,
                        'testimonialtwo_name' => $request->testimonialtwo_name,
                        'testimonialtwo_details' => $request->testimonialtwo_details,
                        // 'slider_image' => $request->slider_image,
                        // 'slider_image' =>
                      ]
                    );
                    return redirect('/table/testimonialtwo');
                  }


              }         //-----------End of Update Function ----------------



              //-------------------------TestimonialTwo End--------------------------

              //-------------------------TestimonialThree Start--------------------------




              //-------------------------TestimonialThree End--------------------------


}       //---------------End Of Class----------------------------
