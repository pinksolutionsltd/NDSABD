<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainslider;
use Carbon\Carbon;
use Image;

class MainsliderController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }


    function addmainslider(){
      return view('mainslider/view');
    }

    function mainsliderinsert(Request $request){
      // print_r($request->all());

      //---------------Validation Part------------------
      $request->validate(
      [
        'slider_heading' => 'required',
        'slider_sub_heading' => 'required',
        'slider_details' => 'required',
      ],
      [
        'slider_heading.required' => "Please fill up the name of Slider Heading",
        'slider_sub_heading.required'=> "Please fill up the name of Slider Sub Heading",
        'slider_details.required' => "Please fill up the name of Slider Details",
      ]
    );

      //---------------End Validation Part------------------

      //--------After Validation ---------------------
      //--------Image Upload----------------------
      if($request->hasFile('slider_image')){
        // $new_file_location = $request->file('slider_image')->store('slider_image_folder');//--------File storage System----

        $slider_image = $request->file('slider_image');
        $filename = str_random(30).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,880)->save( base_path('public/slider_image_folder/' . $filename));



        Mainslider::insert([
          'slider_heading' => $request->slider_heading,
          'slider_sub_heading' => $request->slider_sub_heading,
          'slider_details' => $request->slider_details,
          'created_at' => Carbon::now(),
          'slider_image' => 'slider_image_folder/'.$filename,
        ]);

       return back()->with('success', 'Item Insert Successfully!');
      }

      else{
        return back();
      }


    }
//------------------End validation---------------------------
//--------------Main Slider Table View Function-----------------

    function mainsliderviewtable(){
      $mainsliders = Mainslider::orderBy('id', 'desc')->get();
      $mainslider_restores = Mainslider::onlyTrashed()->get();
      return view('mainslider/table', compact('mainsliders', 'mainslider_restores'));
      // print_r($mainslider);
    }


    //----------------------Delete Function Start---------------
    function mainsliderdelete($mainslider_id){
      // echo $mainslider_id;
      $imageLink = Mainslider::where('id', $mainslider_id)->first();
      $image = $imageLink->slider_image;
      // if ($image) {
      //   unlink($image);
      //   }
      Mainslider::findOrFail($mainslider_id)->delete();
      return back()->with('deletesuccess', 'Item deleted successfully!');
    }
    //----------------------Delete Function End-----------

    //----------------------Edit Function Start----------------------
    function mainslideredit($mainslider_id){
      // echo $mainslider_id;
      $mainsliders = Mainslider::findOrFail($mainslider_id);
      return view('mainslider/edit', compact('mainsliders'));
    }
    //----------------------Edit Function End----------------------


//---------------------Update Function Started---------------------
    function mainsliderupdate(Request $request){
      // print_r($request->all());

        //-----------------------Delete Previous Image from Derectory------------------//
        if($request->hasFile('slider_image')){

          $imageLink = Mainslider::where('id', $request->mainslider_id)->first();
          $image = $imageLink->slider_image;
          // echo $image;
          if ($image) {
            unlink($image);
          }

          $slider_image = $request->file('slider_image');
          $filename = str_random(30).'.'.$slider_image->getClientOriginalExtension();
          Image::make($slider_image)->resize(1920,880)->save( base_path('public/slider_image_folder/' . $filename));


          Mainslider::findOrFail($request->mainslider_id)->update(
            [
              'slider_heading' => $request->slider_heading,
              'slider_sub_heading' => $request->slider_sub_heading,
              'slider_details' => $request->slider_details,
              // 'slider_image' => $request->slider_image,
              'slider_image' => 'slider_image_folder/'.$filename,
            ]
          );
          return redirect('/mainslider/viewtable');
        }

        else{
          Mainslider::findOrFail($request->mainslider_id)->update(
            [
              'slider_heading' => $request->slider_heading,
              'slider_sub_heading' => $request->slider_sub_heading,
              'slider_details' => $request->slider_details,
              // 'slider_image' => $request->slider_image,
              // 'slider_image' =>
            ]
          );
          return redirect('/mainslider/viewtable');
        }

    }         //-----------End of Update Function ----------------



    //-----------------------------------Start Restore Item Part------------------------------------
      function mainsliderrestore($mainslider_id){
        Mainslider::onlyTrashed()->findOrFail($mainslider_id)->restore();
        return back();
      }
  //----------------------------End Resytore Item Part----------------------------------------------



}           //-----------End of Class--------------------------------
